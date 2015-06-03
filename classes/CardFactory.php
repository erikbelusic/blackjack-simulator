<?php

class CardFactory
{
    public static function createCard($rank, $suit)
    {
        return new Card($rank, $suit);
    }

    public static function createDeck()
    {
        $deck = [];

        foreach (Card::$allowedSuits as $suit)
        {
            foreach (Card::$allowedRanks as $rank)
            {
                array_push($deck, new Card($rank, $suit));
            }
        }

        return $deck;
    }

    public static function createDecks($numDecks = 6)
    {
        $shoe = [];

        for ($i = 0; $i < $numDecks; $i++)
        {
            $shoe = array_merge($shoe, static::createDeck());
        }

        return $shoe;
    }
}