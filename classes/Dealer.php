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
        if ($this->hand->getTotal() < 17)
        {
            return BlackJackGame::ACTION_HIT;
        }
        else {
            return BlackJackGame::ACTION_STAND;
        }
    }

    public function discardAllFromHands()
    {
        unset($this->hand);
        $this->hand = new Hand();
    }
}