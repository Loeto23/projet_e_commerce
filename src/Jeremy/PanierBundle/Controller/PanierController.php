<?php

namespace Jeremy\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function panierAction()
    {
        return $this->render('@JeremyPanier/Panier/panier.html.twig');
    }
}
