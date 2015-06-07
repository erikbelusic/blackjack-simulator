<?php

class Player implements CanPlayBlackJack
{
    protected $hands = [];

    protected $activeHand = 0;

    function __construct()
    {
        array_push($this->hands, new Hand());
    }

    public function addToHand(Card $card)
    {
        $this->hands[$this->activeHand]->addCard($card);
    }

    public function chooseAction($status)
    {
        return BlackJackGame::ACTION_STAND;
    }

    public function discardAllFromHands()
    {
        unset($this->hands);
        $this->hands = [];
        array_push($this->hands, new Hand());
    }
}