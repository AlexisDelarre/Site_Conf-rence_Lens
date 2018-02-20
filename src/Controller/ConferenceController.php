<?php

namespace App\Controller;

use App\AppAccess;
use App\AppEvent;
use App\Entity\Conference;
use App\Event\ConferenceEvent;
use App\Form\ConferenceType;
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
 * @Route(path="/conference")
 */
class ConferenceController extends Controller
{

    /**
     * @Route(
     *     path="",
     *     name="app_conference_index"
     * )
     */
    public function index()
    {
        $conf = $this->getDoctrine()->getManager()->getRepository(Conference::class)->findByDate();




        return $this->render('Conference/index.html.twig', ["conference" => $conf]);
    }

    /**
     * @Route(
     *     path="/new",
     *     name="app_conference_new"
     * )
     */
    public function newConference(Request $request, AuthorizationCheckerInterface $authorizationChecker)
    {
        /*if(false === $authorizationChecker->isGranted(AppAccess::ConferenceAdd)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_conference_index");
        }*/
        $conference = $this->get(Conference::class);
        $form = $this->createForm(ConferenceType::class, $conference);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ConferenceEvent::class);
            $event->getConference($conference);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::CONFERENCE_ADD, $event);
            return $this->redirectToRoute("app_conference_index");
        }
        return $this->render("Conference/new.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/edit/{id}", name="app_conference_edit")
     *
     */
    public function editConference(Request $request, Conference $conference, AuthorizationCheckerInterface $authorizationChecker)
    {
       /* if(false === $authorizationChecker->isGranted(AppAccess::ConferenceEdit, $conference)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_conference_index");
        }*/
        $form = $this->createForm(ConferenceType::class, $conference);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ConferenceEvent::class);
            $event->setConference($conference);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::CONFERENCE_EDIT, $event);

            return $this->redirectToRoute("app_conference_index");
        }

        return $this->render("Conference/edit.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/delete/{id}", name="app_conference_delete")
     *
     */
    public function deleteConference(Conference $conference, AuthorizationCheckerInterface $authorizationChecker)
    {
        /*if(false === $authorizationChecker->isGranted(AppAccess::ConferenceDelete, $conference)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_conference_index");
        }*/
        $event = $this->get(ConferenceEvent::class);
        $event->setConference($conference);
        $dispatcher = $this->get("event_dispatcher");
        $dispatcher->dispatch(AppEvent::CONFERENCE_DELETE, $event);

        return $this->redirectToRoute("app_conference_index");
    }

    /**
     * @Route(path="/{id}/show", name="app_conference_show")
     *
     */
    public function showConference(Conference $conference){

        $em =$this->getDoctrine()->getManager();
        $em->flush();

        return $this->render('Conference/show.html.twig', ['conference' => $conference]);
    }

}