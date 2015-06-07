<?php

class Card
{
    const COULD_NOT_INSTANTIATE_OBJECT = 'Card class could not be instantiated - check constructor parameters';

    public static $allowedRanks = ['ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'jack', 'queen', 'king'];

    public static $allowedSuits = ['clubs', 'diamonds', 'hearts', 'spades'];

    public static $values = [
        'ace'   => [1,11],
        2       => 2,
        3       => 3,
        4       => 4,
        5       => 5,
        6       => 6,
        7       => 7,
        8       => 8,
        9       => 9,
        10      => 10,
        'jack'  => 10,
        'queen' => 10,
        'king'  => 10
    ];

    protected $rank;

    protected $suit;

    function __construct($rank, $suit)
    {
        if ( ! $this->isRank($rank) || ! $this->isSuit($suit))
        {
            exit(static::COULD_NOT_INSTANTIATE_OBJECT);
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

    public function getValue()
    {
        return static::$values[$this->rank];
    }

    protected function isRank($rank)
    {
        if (in_array($rank, static::$allowedRanks))
        {
            return true;
        }

        return false;
    }

    protected function isSuit($suit)
    {
        if (in_array($suit, static::$allowedSuits))
        {
            return true;
        }

        return false;
    }

}