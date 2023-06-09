<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum RoleEnum: int
{
    use EnumToArray;

    case Asisten = 2;
    case Admin = 1;
    case Magang = 0;
}
