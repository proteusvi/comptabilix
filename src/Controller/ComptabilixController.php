<?php
/**
 * Created by PhpStorm.
 * User: DBX <dbeux@infomaniak.ch>
 * Date: 16.12.17
 * Time: 13:50
 */
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComptabilixController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(){
        $message = "Vous êtes dans la page d'accueil de Comptabilix";
        return $this->render('comptabilix/accueil.html.twig', array(
            'message' => $message,
        ));
    }
}