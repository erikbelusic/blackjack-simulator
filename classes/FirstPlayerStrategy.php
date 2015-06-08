<?php

class FirstPlayerStrategy implements PlayerStrategy
{
    const HIT = 'strategy.H';
    const STAND = 'strategy.S';
    const DOUBLE_ELSE_HIT = 'strategy.Dh';
    const DOUBLE_ELSE_STAND = 'strategy.Ds';
    const SPLIT = 'strategy.P';

    protected $strategy = [];

    function __construct()
    {
        $this->strategy = [
            BlackJackGame::HAND_HARD => [
                4 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::HIT,
                    6 => static::HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                5 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::HIT,
                    6 => static::HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                6 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::HIT,
                    6 => static::HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                7 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::HIT,
                    6 => static::HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                8 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::HIT,
                    6 => static::HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                9 => [
                    2 => static::HIT,
                    3 => static::DOUBLE_ELSE_HIT,
                    4 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                10 => [
                    2 => static::DOUBLE_ELSE_HIT,
                    3 => static::DOUBLE_ELSE_HIT,
                    4 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::DOUBLE_ELSE_HIT,
                    8 => static::DOUBLE_ELSE_HIT,
                    9 => static::DOUBLE_ELSE_HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                11 => [
                    2 => static::DOUBLE_ELSE_HIT,
                    3 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::DOUBLE_ELSE_HIT,
                    8 => static::DOUBLE_ELSE_HIT,
                    9 => static::DOUBLE_ELSE_HIT,
                    10 => static::DOUBLE_ELSE_HIT,
                    'ace' => static::HIT,
                ],
                12 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                13 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                14 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                15 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                16 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                17 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                18 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                19 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                20 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                21 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
            ],
            BlackJackGame::HAND_SOFT => [
                13 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                14 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                15 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                16 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                17 => [
                    2 => static::HIT,
                    3 => static::DOUBLE_ELSE_HIT,
                    4 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                18 => [
                    2 => static::STAND,
                    3 => static::DOUBLE_ELSE_STAND,
                    4 => static::DOUBLE_ELSE_STAND,
                    5 => static::DOUBLE_ELSE_STAND,
                    6 => static::DOUBLE_ELSE_STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                19 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                20 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
            ],
            BlackJackGame::HAND_SPLITTABLE => [
                4 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::SPLIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                6 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::SPLIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                8 => [
                    2 => static::HIT,
                    3 => static::HIT,
                    4 => static::HIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                10 => [
                    2 => static::DOUBLE_ELSE_HIT,
                    3 => static::DOUBLE_ELSE_HIT,
                    4 => static::DOUBLE_ELSE_HIT,
                    5 => static::DOUBLE_ELSE_HIT,
                    6 => static::DOUBLE_ELSE_HIT,
                    7 => static::DOUBLE_ELSE_HIT,
                    8 => static::DOUBLE_ELSE_HIT,
                    9 => static::DOUBLE_ELSE_HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                12 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::HIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                14 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::SPLIT,
                    8 => static::HIT,
                    9 => static::HIT,
                    10 => static::HIT,
                    'ace' => static::HIT,
                ],
                16 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::SPLIT,
                    8 => static::SPLIT,
                    9 => static::SPLIT,
                    10 => static::SPLIT,
                    'ace' => static::SPLIT,
                ],
                18 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::STAND,
                    8 => static::SPLIT,
                    9 => static::SPLIT,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                20 => [
                    2 => static::STAND,
                    3 => static::STAND,
                    4 => static::STAND,
                    5 => static::STAND,
                    6 => static::STAND,
                    7 => static::STAND,
                    8 => static::STAND,
                    9 => static::STAND,
                    10 => static::STAND,
                    'ace' => static::STAND,
                ],
                22 => [
                    2 => static::SPLIT,
                    3 => static::SPLIT,
                    4 => static::SPLIT,
                    5 => static::SPLIT,
                    6 => static::SPLIT,
                    7 => static::SPLIT,
                    8 => static::SPLIT,
                    9 => static::SPLIT,
                    10 => static::SPLIT,
                    'ace' => static::SPLIT,
                ],
            ],
        ];
    }

    public function getStrategyArray()
    {
        return $this->strategy;
    }

}