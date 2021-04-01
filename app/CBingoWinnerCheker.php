<?php

namespace app;

use App\models\CCard;
use App\CBingo;

class CBingoWinnerCheker
{
    public static function is_winner(CBingo $caller, CCard $card)
    {
        $card_numbers = $card-> get_numbers_in_card();

        foreach($card_numbers as $card_number)
        {
            if(is_null($card_number))
                continue;

            if(!$caller -> has_called_number($card_number) )
            {
                return false;
            }
        }

        return true;
    }
}