<?php

namespace App\Enums;

enum OrderStatusEnums:string {

    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case COMPLETED = 'completed';
    case DECLINED = 'declined';
}

