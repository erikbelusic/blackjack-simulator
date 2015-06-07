<?php

class Shoe
{
    protected $cards = [];

    protected $penetrationCardPositionFromBack;

    function __construct($decks = 6)
    {
        $this->cards = CardFactory::createDecks($decks);
    }

    public function burnOneCard()
    {
        return $this->dealCard();
    }

    public function shuffle()
    {
        $this->cards = $this->fisherYatesShuffle($this->cards);
    }

    public function dealCard()
    {
        return array_shift($this->cards);
    }

    public function remainingCards()
    {
        return count($this->cards);
    }

    public function isFull()
    {
        // TODO: implement
    }

    public function setPenetrationCardPosition($number = 91)
    {
        $this->penetrationCardPositionFromBack = $number;
    }

    public function penetrationCardPosition()
    {
        return $this->penetrationCardPositionFromBack;
    }

    protected function fisherYatesShuffle($items)
    {
        // TODO: use actual fisher yates shuffle
        $newItems = $items;
        shuffle($newItems);
        return $newItems;
    }
}