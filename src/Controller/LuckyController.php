<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
   /**
   * @Route("/lucky/number")
   */
    public function number(): Response
    {
        $number = random_int(0, 100);
        $title = "welcome to the lucky number game";
        $data = [
            'number' => $number,
            'title' => $title
        ];
        return $this->render('lucky/number.html.twig', $data);
    }
}