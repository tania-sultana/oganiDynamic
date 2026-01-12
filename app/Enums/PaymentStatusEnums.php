<?php

namespace App\Enums;

enum PaymentStatusEnums: string
{
    case PAID = 'paid';
    case UNPAID = 'unpaid';
}
