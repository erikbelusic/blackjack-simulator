<?php

require __DIR__ . '/vendor/autoload.php';

$shoe = CardFactory::createDecks(2);

dump($shoe);