<?php

namespace app\models;

class CCard
{
    private $grid;
    CONST LIMIT_INF = 1;

    public function __construct( $grid )
    {
        $this -> grid = $grid;
    }

    public function is_valid(): bool
    {  
        return $this -> has_valid_size() && $this -> respect_boundaries();
    }

    private function has_valid_size(): bool
    {
        foreach ($this -> grid as $column)
        {
            if(sizeof($column) !== 5)
                return false;
        }

        return true;
    }

    private function respect_boundaries(): bool
    {
        return $this -> column_elements_between($this -> grid['B'], 1, 15)
            && $this -> column_elements_between($this -> grid['I'], 16, 30)
            && $this -> column_elements_between($this -> grid['N'], 31, 45)
            && $this -> column_elements_between($this -> grid['G'], 46, 60)
            && $this -> column_elements_between($this -> grid['O'], 61, 75);
    }

    private function column_elements_between($column, $min, $max): bool
    {
        foreach ($column as $number)
        {
            if($number < $min || $number > $max)
                return false;
        }

        return true;
    }
}