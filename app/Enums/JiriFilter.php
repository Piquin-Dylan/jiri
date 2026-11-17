<?php

namespace App\Enums;

enum JiriFilter: string
{
    case all = 'all';
    case current = 'current';
    case coming = 'coming';
    case archived = 'archived';
}
