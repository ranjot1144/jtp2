<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'prod_id',
        'prod_name',
        'range_id',
    ];

    public function range() {
        return $this->belongsTo(Range::class);
    }
}
