<?php

namespace App\Enums;

enum ContactRole: string
{
    case evaluator = 'Evaluator';
    case evaluated = 'Evaluated';
}
