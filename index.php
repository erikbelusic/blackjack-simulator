<?php

require __DIR__ . '/vendor/autoload.php';

//$game = new BlackJackGame();
//$game->start();

$strategy = new FirstPlayerStrategy();
$myArray = $strategy->getStrategyArray();
dump($myArray[BlackJackGame::HAND_HARD][12][2]);
dump($myArray[BlackJackGame::HAND_HARD][12][3]);
dump($myArray[BlackJackGame::HAND_HARD][12][4]);