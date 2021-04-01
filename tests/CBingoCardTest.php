<?php 

use PHPUnit\Framework\TestCase;
use App\CBingoCard;

class CBingoCartTest extends TestCase
{
    public function testCardContainsValidNumbersRespectingColumnBoudaries()
    {
        $bingo_card = new CBingoCard();
        $card = $bingo_card -> generate_card();

        $this->assertTrue($card->is_valid());
    }

    public function testCardHasFreeSpaceInTheMiddle()
    {
        $bingo_card = new CBingoCard();
        $card = $bingo_card -> generate_card();

        $this->assertTrue($card -> has_free_space_in_the_middle());
    }
}