<?php

namespace ConvertBundle\Controller;

use ConvertBundle\Entity\Panier;
use ConvertBundle\Form\PanierType;
use ConvertBundle\Services\CalculateurService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package ConvertBundle\Controller
 */
class DefaultController extends Controller
{


    public function indexAction(Request $request, CalculateurService $calculateurService)
    {
        $panier = new Panier();
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $result = $calculateurService->calculate($panier);
            return $this->render('ConvertBundle::Convertisseur.html.twig', array(
                'form' => $form->createView(),
                'result' => $result
            ));


        }

        return $this->render('ConvertBundle::Convertisseur.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
