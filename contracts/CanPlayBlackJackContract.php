<?php

interface CanPlayBlackJack
{
    public function addToHand(Card $card);
    public function chooseAction($status);
    public function discardAllFromHands();
}