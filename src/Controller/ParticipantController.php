<?php

namespace App\Controller;

use App\AppAccess;
use App\AppEvent;
use App\Entity\Participant;
use App\Event\ParticipantEvent;

use App\Form\ParticipantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


/**
 * Created by PhpStorm.
 * User: alexis.delarre
 * Date: 09/02/18
 * Time: 15:01
 */

/**
 * @Route(path="/participant")
 */
class ParticipantController extends Controller
{

    /**
     * @Route(
     *     path="",
     *     name="app_conference_index"
     * )
     */
    public function listing()
    {
        $participant = $this->getDoctrine()->getManager()->getRepository(Participant::class)->findAll();

        return $this->render('Participant/liste.html.twig', ["participant" => $participant]);
    }

    /**
     * @Route(
     *     path="/new",
     *     name="app_participant_new"
     * )
     */
    public function newParticipant(Request $request, AuthorizationCheckerInterface $authorizationChecker)
    {
        /*if(false === $authorizationChecker->isGranted(AppAccess::ParticipantAdd)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_homepage_index");
        }*/
        $participant = $this->get(Participant::class);
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ParticipantEvent::class);
            $event->getParticipant($participant);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::PARTICIPANT_ADD, $event);
            return $this->redirectToRoute("app_homepage_index");
        }
        return $this->render("Participant/new.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/{id}/edit", name="app_participant_edit")
     *
     */
    public function editParticipant(Request $request, Participant $participant, AuthorizationCheckerInterface $authorizationChecker)
    {
        /* if(false === $authorizationChecker->isGranted(AppAccess::ParticipantEdit, $participant)){
             $this->addFlash('error', 'access deny !');
             return $this->redirectToRoute("app_homepage_index");
         }*/
        $form = $this->createForm(ParticipantType::class, $participant);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ParticipantEvent::class);
            $event->setParticipant($participant);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::PARTICIPANT_EDIT, $event);

            return $this->redirectToRoute("app_homepage_index");
        }

        return $this->render("Participant/edit.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/{id}/delete", name="app_participant_delete")
     *
     */
    public function deleteParticipant(Participant $participant, AuthorizationCheckerInterface $authorizationChecker)
    {
        /*if(false === $authorizationChecker->isGranted(AppAccess::ParticipantDelete, $participant)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_homepage_index");
        }*/
        $event = $this->get(ParticipantEvent::class);
        $event->setParticipant($participant);
        $dispatcher = $this->get("event_dispatcher");
        $dispatcher->dispatch(AppEvent::PARTICIPANT_DELETE, $event);

        return $this->redirectToRoute("app_homepage_index");
    }

    /**
     * @Route(path="/{id}/show", name="app_participant_show")
     *
     */
    public function showParticipant(Participant $participant){

        $em =$this->getDoctrine()->getManager();
        $em->flush();

        return $this->render('Participant/show.html.twig', ['participant' => $participant]);
    }

}