<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum RoleEnum: string
{
    use EnumToArray;

    case Asisten = "Asisten";
    case Admin = "Admin";
    case Magang = "Magang";
}
