<?php

namespace App\Controller;

use App\Service\RecuperateurContexte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    public function __construct(private readonly RecuperateurContexte $recuperateurContexte)
    {


    }
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {

        $ismobile = $this->recuperateurContexte->isMobile($request);
        $contexte = $this->recuperateurContexte->recupContexte($request);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'contexte' => $contexte,
            'ismobile' => $ismobile
        ]);

    }
}
