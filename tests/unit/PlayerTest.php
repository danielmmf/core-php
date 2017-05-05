<?php


class PlayerTest extends TestCase
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $player;

    protected function _before()
    {
        $this->player = new App\Player;
    }

    protected function _after()
    {
    }

    // tests
    public function testShouldCreateANewPlayer()
    {
        
        $todos =  App\Player::all();
        $this->player = new App\Player;

        $this->assertEquals(0 , $todos->count());
        $this->player->name = 'nome de teste';

        var_dump($this->player->save());
 

        $todos =  App\Player::all();
        $this->assertEquals(1 , $todos->count());

    }
}