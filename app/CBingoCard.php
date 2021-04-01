<?php
namespace app;

use App\models\CCard;
use App\CBingoRules;

class CBingoCard
{
    private $grid = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => [],
    ];

    public function generate_card() : CCard
    {
        foreach($this->grid as $column_letter => $column)
        {
            $this->grid[$column_letter] = $this -> generate_column_with_boundaries(
                CBingoRules::BOUNDARIES[$column_letter][0],
                CBingoRules::BOUNDARIES[$column_letter][1]);
        }
        //Free space at the middle of a card
        $this -> grid['N'][2] = null;

        return new CCard( $this->grid );
    }

    public function generate_column_with_boundaries($min, $max)
    {
        $column = [];

        while (sizeof($column) < 5)
        {
            $number = rand($min, $max);

            if(!in_array($number, $column))
            {
                $column[] = $number;
            }
        }

        return $column;
    }
}