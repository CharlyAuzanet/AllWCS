<?php

namespace ConvertBundle\Services;

use ConvertBundle\Entity\Panier;

/**
 * Class CalculateurService
 * @package ConvertBundle\Services
 */
class CalculateurService
{
    /**
     * @param Panier $panier
     * @return array
     */
    public function calculate(Panier $panier): array
    {

        $htTotal = $panier->getQuantite() * $panier->getPrix();
        $ttcTotal = $panier->getTva() / 100 * $htTotal + $htTotal;

        $result = array(
            'ht' =>$htTotal,
            'ttc'=> $ttcTotal,
            'nom' => $panier->getNom()
        );
        return $result;

    }
}

