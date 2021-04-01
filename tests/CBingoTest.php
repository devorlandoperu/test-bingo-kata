<?php 
use PHPUnit\Framework\TestCase;
use App\CBingo;
use App\CBingoRules;

class CBingoTest extends TestCase
{
    public function testWhenCallANumberItsInTheValidRange()
    {
        $caller = new CBingo();
        $number = $caller->call_number();

        $this->assertTrue(
            $number >= CBingoRules:: MIN_CARD_NUMBER
         && $number <= CBingoRules:: MAX_CARD_NUMBER
        );
    }

    public function testWhenCalls75TimeAllNumbersArePresent()
    {
        $caller = new CBingo();
        $called_numbers = [];
        $expectedNumbers = range(CBingoRules:: MIN_CARD_NUMBER, CBingoRules:: MAX_CARD_NUMBER);

        for ($i=1; $i <=75 ; $i++) { 
            
            $called_numbers[] = $caller->call_number();
        }

        sort($called_numbers);

        $this->assertEquals($expectedNumbers, $called_numbers);

    }
}