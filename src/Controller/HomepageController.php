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

class HomepageController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     **/
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('homepage/accueil.html.twig');
    }
}