<?php

namespace App\Controller;

use App\AppAccess;
use App\AppEvent;
use App\Entity\Participant;
use App\Event\ParticipantEvent;

use App\Form\ParticipantEditType;
use App\Form\ParticipantType;
use Swift_Mailer;
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
     *     name="app_participant_listing"
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
    public function newParticipant(Request $request, Swift_Mailer $mailer)
    {

        $participant = $this->get(Participant::class);
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ParticipantEvent::class);
            $event->getParticipant($participant);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::PARTICIPANT_ADD, $event);

            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('sitelmlartois@gmail.com')
                ->setTo('sitelmlartois@gmail.com')
                ->setBody("Une nouvelle personne s'est inscrit sur le site: " . $participant->getName() . $this->renderView(

                        'email/email.html.twig'));
            $mailer->send($message);

            return $this->redirectToRoute("app_homepage_index");

        }
        return $this->render("Participant/new.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/edit/{id}", name="app_participant_edit")
     *
     */
    public function editParticipant(Request $request, Participant $participant)
    {

        $form = $this->createForm(ParticipantEditType::class, $participant);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ParticipantEvent::class);
            $event->setParticipant($participant);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::PARTICIPANT_EDIT, $event);

            return $this->redirectToRoute("admin_participant");
        }

        return $this->render("Participant/edit.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/delete/{id}", name="app_participant_delete")
     *
     */
    public function deleteParticipant(Participant $participant)
    {

        $event = $this->get(ParticipantEvent::class);
        $event->setParticipant($participant);
        $dispatcher = $this->get("event_dispatcher");
        $dispatcher->dispatch(AppEvent::PARTICIPANT_DELETE, $event);

        return $this->redirectToRoute("admin_participant");
    }

    /**
     * @Route(path="/show/{id}", name="app_participant_show")
     *
     */
    public function showParticipant(Participant $participant){

        $em =$this->getDoctrine()->getManager();
        $em->flush();

        return $this->render('Participant/liste.html.twig', ['participant' => $participant]);
    }

}