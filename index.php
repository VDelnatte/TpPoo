<?php

namespace Vdln\Poo;

include_once __DIR__ . '/vendor/autoload.php';

use Vdln\Poo\Card;
use Vdln\Poo\ListCards;

$nbCards = (int)readline('Combien de cartes voulez vous ajouter ? ');
echo PHP_EOL;
if (is_numeric($nbCards) && $nbCards > 0) {
    $listCard = new ListCards();

    for ($i = 0; $i < $nbCards; $i++)
    {
        $question = readline('Saisissez une question pour la carte '.($i+1).' : ');
        $answer = readline('Saisissez une réponse pour la carte '.($i+1).' : ');
        $card = new Card($question, $answer);
        $listCard->addCard ($card);
    }
    $listCard->printCardsInfo();
}else
{
    echo 'Veuillez saisir un entier supérieur à zéro';
}



