<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;

    protected $fillable = array(
        'product_category_id', 
        'title_en', 'title_jp', 'slug', 
        'image', 
        'description_en', 'description_jp', 
        'content_en', 'content_jp', 
        'is_active', 
        'timestamps'
    );

    public function product_category() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

}