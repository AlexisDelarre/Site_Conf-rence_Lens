<?php

namespace App\Controller;

use App\Entity\Conference;
use App\Entity\Participant;
use App\Entity\Homepage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    /**
     * @Route("/panel_admin", name="admin")
     */
    public function index()
    {
        return $this->render('Admin/index.html.twig');
    }

    /**
     * @Route("/admin/participant", name="admin_participant")
     */
    public function participantManagement()
    {
        $em = $this->getDoctrine()->getManager();
        $participants = $em->getRepository(Participant::class)->findAll();

        return $this->render('Admin\participant.html.twig',['participants'=>$participants]);
    }

    /**
     * @Route("/admin/conference", name="admin_conference")
     */
    public function conferenceManagement()
    {
        $em = $this->getDoctrine()->getManager();
        $conferences = $em->getRepository(Conference::class)->findAll();

        return $this->render('Admin\conference.html.twig',['conferences'=>$conferences]);
    }

    /**
     * @Route("/admin/homepage", name="admin_homepage")
     */
    public function homepageManagement()
    {
        $em = $this->getDoctrine()->getManager();
        $homepages = $em->getRepository(Homepage::class)->findAll();

        return $this->render('Admin\homepage.html.twig',['homepages'=>$homepages]);
    }

    /**
     * @Route("/admin/participant/delete/{id}", name="admin_participant_delete")
     */
    public function deleteParticipant($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $participant = $em->getRepository(\App\Entity\Participant::class)->find($id);

        $conferences = $em->getRepository(\App\Entity\Conference::class)->findBy(array("participant" => $participant));

        foreach ($conferences as $conference){
            $em->remove($conference);
        }
        $em->remove($participant);

        $em->flush();

        return $this->redirectToRoute('admin_participant');
    }

    /**
     * @Route("/admin/conference/delete/{id}", name="admin_conference_delete")
     */
    public function deleteConference($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $conference = $em->getRepository(\App\Entity\Conference::class)->find($id);

        $em->remove($conference);

        $em->flush();

        return $this->redirectToRoute('admin_conference');
    }

}