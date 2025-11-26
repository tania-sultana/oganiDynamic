<?php

namespace App\Enums;

enum PaymentMethodEnums : string
{
    case CASH = 'cash on delivery';
    case ONLINE = 'online payment';
}
