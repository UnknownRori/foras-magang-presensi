<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum RoleEnum: int
{
    use EnumToArray;

    case Admin = 1;
    case NonAdmin = 0;
}
