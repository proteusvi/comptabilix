<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }


    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberMax($max)
    {
        $_max = $max;
        $number = mt_rand(0, $_max);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

}