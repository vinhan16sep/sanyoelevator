<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model 
{
    use HasFactory;

    protected $table = 'parts';
    public $timestamps = true;

    protected $fillable = array(
        'product_id', 
        'title', 'code',
        'image', 
        'type', 'load', 
        'speed', 'date', 
        'description',
        'is_active', 
        'timestamps'
    );

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function part_serials()
    {
        return $this->hasMany(PartSerial::class, 'part_id');
    }

}