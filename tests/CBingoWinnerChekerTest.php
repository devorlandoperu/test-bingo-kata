<?php 

use PHPUnit\Framework\TestCase;
use App\CBingoCard;
use App\CBingo;
use App\CBingoWinnerCheker;

class CBingoWinnerChekerTest extends TestCase
{
    public function testChekerDeterminesNotWinnerYet()
    {
        $caller = new CBingo();
        $card = (new CBingoCard())-> generate_card() ;

        //Let call only 20 numbers [ Not a winner yet]
        for ($i=1; $i <= 20 ; $i++) { 
            $caller-> call_number();
        }
        
        $this -> assertFalse(
            CBingoWinnerCheker::is_winner($caller, $card)
        );
    }

    public function testChekerDeterminesAWinnerCorrect()
    {
        $caller = new CBingo();
        $card = (new CBingoCard())-> generate_card() ;

        //Let call only of the numbers
        for ($i=1; $i <= 75 ; $i++) { 
            $caller-> call_number();
        }

        $this -> assertTrue(
            CBingoWinnerCheker::is_winner($caller, $card)
        );
                
    }
}