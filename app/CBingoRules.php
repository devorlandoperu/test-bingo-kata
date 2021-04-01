<?php

namespace app;

class CBingoRules
{
    const MIN_CARD_NUMBER = 1;
    const MAX_CARD_NUMBER = 75;


    const BOUNDARIES = [
        'B' => [1,15],
        'I' => [16,30],
        'N' => [31,45],
        'G' => [46,60],
        'O' => [61,75]
    ];

}