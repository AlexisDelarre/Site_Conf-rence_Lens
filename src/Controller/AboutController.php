<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 19/02/18
 * Time: 21:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route(
 *     path="/about",
 * )
 */
class AboutController extends Controller
{
    /**
     * @Route(
     *     path="/show",
     *     name="app_about_show"
     * )
     */
    public function showAbout()
    {
        return $this->render("About/show.html.twig");
    }


}