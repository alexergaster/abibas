<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, Filterable;

    protected $table = 'products';
    protected $guarded = [];

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function gender(): belongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function brand(): belongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
