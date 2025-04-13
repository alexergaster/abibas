<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'genders';
    protected $guarded = [];
    public $timestamps = false;

    public function products(): hasMany
    {
        return $this->hasMany(Product::class);
    }
}
