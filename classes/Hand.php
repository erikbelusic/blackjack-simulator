<?php

class Hand
{
    protected $cards = [];

    public function getNumberOfCards()
    {
        // TODO: implement
    }

    public function getTotal()
    {
        // TODO: implement
    }

    public function getCards()
    {
        // TODO: implement
    }

    public function addCard(Card $card)
    {
        array_push($this->cards, $card);
    }
}