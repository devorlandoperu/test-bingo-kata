<?php

namespace app;

use App\CBingoRules;

class CBingo
{
    private $numbers = [];

    public function __construct()
    {

    }

    public function call_number()
    {
        do 
        {   
            $number = rand(CBingoRules::MIN_CARD_NUMBER, CBingoRules::MAX_CARD_NUMBER);

        }while(in_array($number, $this-> numbers));
        
        $this->numbers[] = $number;

        return $number;
    }

    public function has_called_number($card_number): bool
    {
        return in_array($card_number, $this->numbers);
    }
}