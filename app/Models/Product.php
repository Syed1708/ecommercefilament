<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable =  [
        'brand_id',
        'name',
        'slug',
        'sku',
        'image',
        'qty',
        'price',
        'is_visible',
        'is_featured',
        'description',
        'type',
        'published_at',
    ];
    public function categories():BelongsToMany{

        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
