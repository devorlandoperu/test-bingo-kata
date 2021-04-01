<?php 
    use PHPUnit\Framework\TestCase;
    use App\CBingo;

    class CBingoTest extends TestCase
    {
        public function testWhenCallANumberItsInTheValidRange()
        {
            $caller = new CBingo();
            $number = $caller->call_number();

            $this->assertTrue($number >=1 && $number <=75);
        }

        public function testWhenCalls75TimeAllNumbersArePresent()
        {
            $caller = new CBingo();
            $called_numbers = [];
            $expectedNumbers = range(1,75);

            for ($i=1; $i <=75 ; $i++) { 
                
                $called_numbers[] = $caller->call_number();
            }

            sort($called_numbers);

            $this->assertEquals($expectedNumbers, $called_numbers);

        }
    }