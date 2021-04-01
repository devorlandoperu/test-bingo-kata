<?php
namespace app;
use App\models\CCard;

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
        $this -> grid['B'] = $this -> generate_column_with_boundaries(1, 15);
        $this -> grid['I'] = $this -> generate_column_with_boundaries(16, 30);
        $this -> grid['N'] = $this -> generate_column_with_boundaries(31, 45);
        $this -> grid['G'] = $this -> generate_column_with_boundaries(46, 60);
        $this -> grid['O'] = $this -> generate_column_with_boundaries(61, 75);

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