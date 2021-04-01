<?php

namespace app;

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
            $number = rand(1, 75);

        }while(in_array($number, $this-> numbers));
        
        $this->numbers[] = $number;

        return $number;
    }
}