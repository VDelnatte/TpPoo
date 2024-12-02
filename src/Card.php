<?php

namespace Vdln\Poo;

class Card {

    private $question ;
    private $answer ;

    public function __construct(string $question, string $answer) {
        $this->question = $question;
        $this->answer = $answer;
    }

    public function getQuestion() {
        return $this->question;
    }

    public function getAnswer() {
        return $this->answer;
    }

}

