<?php


namespace App\Controller\Back;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeAdminController extends AbstractController
{
    /**
     * @Route("/admin", name="home_admin")
     *
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('back/home_admin.html.twig');
    }
}