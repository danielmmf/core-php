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
        //$this->player = new App\Player;
    }

    protected function _after()
    {

    }

    // tests
    public function testShouldCreateANewPlayer()
    {
        
        $todos =  App\Player::all();
        $this->assertEquals(0 , $todos->count());

        $player = App\Player::novoPlayer(array('name'=>'nome de teste'));
 
        $todos =  App\Player::all();
        $this->assertEquals(1 , $todos->count());


        $player1 = App\Player::novoPlayer(array('name'=>'nome de teste1'));

        $todos =  App\Player::all();
        $this->assertEquals(2 , $todos->count());

        $player->delete();
        $player1->delete();

    }
}