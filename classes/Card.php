<?php

class Card
{
    const COULD_NOT_INSTANTIATE_OBJECT = 'Card class could not be instantiated - check constructor parameters';

    public static $allowedRanks = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];

    public static $allowedSuits = ['clubs', 'diamonds', 'hearts', 'spades'];

    protected $rank;

    protected $suit;

    function __construct($rank, $suit)
    {
        if ( ! $this->isRank($rank) || ! $this->isSuit($suit))
        {
            exit(STATIC::COULD_NOT_INSTANTIATE_OBJECT);
        }

        $this->rank = $rank;
        $this->suit = $suit;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getRank()
    {
        return $this->rank;
    }

    protected function isRank($rank)
    {
        if (in_array($rank, STATIC::$allowedRanks))
        {
            return true;
        }

        return false;
    }

    protected function isSuit($suit)
    {
        if (in_array($suit, STATIC::$allowedSuits))
        {
            return true;
        }

        return false;
    }

}