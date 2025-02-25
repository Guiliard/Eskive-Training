<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',        
        'description', 
        'price', 
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class); // One product belongs to one category
    }
}
