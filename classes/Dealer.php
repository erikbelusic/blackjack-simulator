<?php

class Dealer implements CanPlayBlackJack
{
    protected $hand;

    function __construct()
    {
        $this->hand = new Hand();
    }

    public function addToHand(Card $card)
    {
        $this->hand->addCard($card);
    }

    public function chooseAction($status)
    {
        return BlackJackGame::ACTION_STAND;
    }

    public function discardAllFromHands()
    {
        unset($this->hand);
        $this->hand = new Hand();
    }
}