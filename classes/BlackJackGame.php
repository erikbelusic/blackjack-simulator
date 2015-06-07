<?php

class BlackJackGame
{
    const ACTION_HIT = 'action.hit';

    const ACTION_STAND = 'action.stand';

    protected $status = [
        'round' => 0
    ];

    protected $shoe;

    protected $player;

    protected $dealer;

    protected function dealNewRound()
    {
        $this->dealTo($this->player);
        $this->dealTo($this->dealer);
        $this->dealTo($this->player);
        $this->dealTo($this->dealer);
    }

    public function dealTo(CanPlayBlackJack $person)
    {
        $card = $this->shoe->dealCard();
        $person->addToHand($card);
    }

    public function start()
    {
        dump("game started");

        $this->prepareShoe();

        dump("shoe created, shuffled, penetrated, and one card burned");

        $this->player = new Player();
        $this->dealer = new Dealer();

        dump('player and dealer init');

        while ($this->shoe->remainingCards() > $this->shoe->penetrationCardPosition()) {
            $this->status['round'] += 1;
            dump('beggining round ' . $this->status['round']);
            $this->dealNewRound();
            $this->playRound();
            $this->discardInPlayCards();
            dump('ending round ' . $this->status['round']);
        }


        dump('shoe has ended');




        //$this->doDebug();
    }

    protected function prepareShoe()
    {
        $this->shoe = new Shoe();
        $this->shoe->shuffle();
        $this->shoe->setPenetrationCardPosition();
        $this->shoe->burnOneCard();
    }

    protected function doDebug()
    {
        echo "Player \r\n";
        dump($this->player);
        echo "Dealer \r\n";
        dump($this->dealer);
        echo "Cards started with 312 (hard coded) \r\n";
        echo "Cards left ";
        dump($this->shoe->remainingCards());
    }

    protected function playRound()
    {
        $playerAction = $this->player->chooseAction($this->status);
        $this->doAction($playerAction);
        $dealerAction = $this->dealer->chooseAction($this->status);
        $this->doAction($dealerAction);
    }

    private function doAction($action)
    {
        switch ($action) {
            case static::ACTION_STAND :
                dump('action.stand has been taken');
                return true;
                break;
        }
    }

    protected function discardInPlayCards()
    {
        $this->dealer->discardAllFromHands();
        $this->player->discardAllFromHands();
        dump('hands emptied');
    }
}