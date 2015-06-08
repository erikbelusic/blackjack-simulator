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
        $total = 0;
        $aces = [];

        foreach ($this->cards as $card)
        {
            $value = $card->getValue();
            if (count($value) == 1)
            {
                $total += $value;
            }
            else
            {
                array_push($aces, $value);
            }
        }

        foreach ($aces as $ace)
        {
            if ($total + $ace[1] <= 21)
            {
                $total += $ace[1];
            }
            else
            {
                $total += $ace[0];
            }
        }

        return $total;
    }

    public function getHandType()
    {
        if (count($this->cards) == 2 && $this->cards[0]->getValue() == $this->cards[1]->getValue())
        {
            return BlackJackGame::HAND_SPLITTABLE;
        }

        $cardRanks = [];
        foreach ($this->cards as $card)
        {
            array_push($cardRanks, $card->getRank());
        }

        if (in_array('ace', $cardRanks))
        {
            return BlackJackGame::HAND_SOFT;
        }

        return BlackJackGame::HAND_HARD;
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