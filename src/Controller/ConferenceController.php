<?php

namespace App\Controller;

use App\AppEvent;
use App\Entity\Conference;
use App\Event\ConferenceEvent;
use ConferenceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

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
     *     path="/new",
     *     name="app_article_new"
     * )
     */
    public function newArticle(Request $request, AuthorizationCheckerInterface $authorizationChecker)
    {
        $article = $this->get(Conference::class);
        $form = $this->createForm(ConferenceType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ConferenceEvent::class);
            $event->getArticle($article);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::CONFERENCE_ADD, $event);
            return $this->redirectToRoute("app_article_index");
        }
        return $this->render("Conference/new.html.twig", ["form" => $form->createView()]);
    }

    public function editAction(Request $request, Conference $conference, AuthorizationCheckerInterface $authorizationChecker)
    {
        if(false === $authorizationChecker->isGranted(AppAccess::ArticleEdit, $conference)){
            $this->addFlash('error', 'access deny !');
            return $this->redirectToRoute("app_article_index");
        }
        $form = $this->createForm(ArticleType::class, $conference);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $event = $this->get(ArticleEvent::class);
            $event->setArticle($conference);
            $dispatcher = $this->get("event_dispatcher");
            $dispatcher->dispatch(AppEvent::ARTICLE_EDIT, $event);

            return $this->redirectToRoute("app_article_index");
        }

        return $this->render("Article/edit.html.twig", ["form" => $form->createView()]);
    }
}