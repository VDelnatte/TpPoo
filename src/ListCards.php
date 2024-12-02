<?php

namespace Vdln\Poo;

use Vdln\Poo\Card;

require_once 'index.php';

class ListCards {

    private $listCards = [];

    public function getListCards(): array
    {
        return $this->listCards;
    }

    public function addCard(Card $card): void
    {
        $this->listCards[] = $card;
    }

    public function printCardsInfo ()
    {
        echo 'Listing des cartes contenues dans la liste : ' . PHP_EOL;
        echo PHP_EOL;
        foreach ($this->listCards as $key => $card) {
            echo 'Info sur la carte '.($key + 1).' :'.PHP_EOL;
            echo 'Question : '.$card->getQuestion().PHP_EOL;
            echo 'Réponse : '.$card->getAnswer().PHP_EOL;
        }
    }
}