<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartSerial extends Model 
{
    use HasFactory;

    protected $table = 'part_serials';
    public $timestamps = true;

    protected $fillable = array(
        'product_id', 
        'part_id',
        'serial', 'secret',
        'is_active', 
        'timestamps'
    );

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function part() {
        return $this->belongsTo(Part::class, 'part_id', 'id');
    }

}