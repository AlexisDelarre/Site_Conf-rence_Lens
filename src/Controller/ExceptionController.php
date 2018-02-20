<?php
/**
 * Created by PhpStorm.
 * User: nh
 * Date: 20/02/18
 * Time: 10:29
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Exception\FlattenException;

class ExceptionController extends Controller
{
    public function showException(FlattenException $exception) {
        $statusCode = $exception->getStatusCode();
        $message="";
        if($statusCode == 301) {$message = "301 ERROR"; }
        if($statusCode == 310) {$message = "310 ERROR"; }
        if($statusCode == 400) {$message = "400 ERROR"; }
        if($statusCode == 401) {$message = "401 ERROR" ;}
        if($statusCode == 403) {$message = "403 ERROR";}
        if($statusCode == 404) {$message = "404 ERROR"; }
        if($statusCode == 405) {$message = "405 ERROR"; }
        if($statusCode == 500) {$message = "500 ERROR"; }
        if($statusCode == 501) {$message = "501 ERROR"; }
        if($statusCode == 502) {$message = "502 ERROR"; }
        if($statusCode == 503) {$message = "503 ERROR"; }
        if($statusCode == 504) {$message = "504 ERROR"; }
        return $this->render('Exception/show.html.twig', array('statusCode' => $statusCode, 'message' => $message));
    }
}