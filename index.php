<?php

require __DIR__ . '/vendor/autoload.php';

$deck = [];

foreach (Card::$allowedSuits as $suit)
{
    foreach (Card::$allowedRanks as $rank)
    {
        array_push($deck, new Card($rank, $suit));
    }
}

dump($deck);