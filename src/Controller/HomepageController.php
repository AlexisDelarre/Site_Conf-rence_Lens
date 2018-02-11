<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 11/02/18
 * Time: 19:22
 */

namespace App\Controller;


use App\AppAccess;
use App\AppEvent;
use App\Entity\Homepage;
use App\Event\HomepageEvent;
use App\Form\HomepageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class HomepageController extends Controller
{

    /**
     * @Route(
     *     path="",
     *     name="app_homepage_index"
     * )
     */
    public function index()
    {
        $homepage = $this->getDoctrine()->getManager()->getRepository(Homepage::class)->findAll();

        return $this->render('Homepage/index.html.twig', ["homepage" => $homepage]);
    }

    /**
     * @Route(
     *     path="/new",
     *     name="app_homepage_new"
     * )
     */
    public function newHomepage(Request $request, AuthorizationCheckerInterface $authorizationChecker)
    {
        if(false === $authorizationChecker->isGranted(AppAccess::HomepageAdd)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_homepage_index");
        }
        $homepage = $this->get(Homepage::class);
        $form = $this->createForm(HomepageType::class, $homepage);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(HomepageEvent::class);
            $event->getHomepage($homepage);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::HOMEPAGE_ADD, $event);
            return $this->redirectToRoute("app_homepage_index");
        }
        return $this->render("Homepage/new.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route(path="/{id}/edit", name="app_homepage_edit")
     *
     */
    public function editHomepage(Request $request, Homepage $homepage, AuthorizationCheckerInterface $authorizationChecker)
    {
        if(false === $authorizationChecker->isGranted(AppAccess::HomepageEdit, $homepage)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_homepage_index");
        }
        $form = $this->createForm(HomepageType::class, $homepage);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(HomepageEvent::class);
            $event->getHomepage($homepage);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::HOMEPAGE_EDIT, $event);

            return $this->redirectToRoute("aap_homepage_index");
        }

        return $this->render("Homepage/edit.html.twig", ["form" => $form->createView()]);
    }

}