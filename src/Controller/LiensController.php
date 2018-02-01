<?php
/**
 * Created by PhpStorm.
 * User: nh
 * Date: 01/02/18
 * Time: 22:00
 */

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LiensController extends AbstractController {
    /**
     * @Route("/liens", name="liens")
     **/
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('liens/liens.html.twig');
    }
}