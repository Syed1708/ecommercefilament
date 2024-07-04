<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =  [
        'customer_id',
        'customers',
        'order_number',
        'priece',
        'status',
        'shiping_priece',
        'notes',
    ];
    
    public function customer():BelongsTo{

        return $this->belongsTo(Customer::class);
    }

    public function items():HasMany{

        return $this->hasMany(OrderItem::class);
    }
}
