<?php 

use PHPUnit\Framework\TestCase;
use App\CBingoCard;

class CBingoCartTest extends TestCase
{
    public function testCardContainsValidNumbersAccordingToColumn()
    {
        $bingo_card = new CBingoCard();
        $cart = $bingo_card -> generate_card();

        $this->assertTrue($cart->is_valid());
    }  
}