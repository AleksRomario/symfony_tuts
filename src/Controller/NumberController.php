<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NumberController extends AbstractController
{
    /**
     * @Route("/number")
     */
    public function number()
    {
        $randomNumber = random_int(0, 100);


        return $this->render ('number.html.twig', [
            'numberResult'=> $randomNumber
        ]);

    }
}