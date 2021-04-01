<?php
namespace app;
use App\models\CCard;

class CBingoCard
{
    private $card = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => [],
    ];

    public function generate_card() : CCard
    {
        return new CCard( $this->card );
    }
}