<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Range extends Model
{
    /*public $table = 'range';
    use HasFactory;
    protected $fillable = [
        'range_id',
        'range_name',
    ];

    public function products() {
        return $this->hasMany(Product::class, 'range_id');
    }*/

    use HasFactory;

    protected $table = 'range';

    protected $fillable = [
    	'range_id',
        'range_name',
    ];
}
