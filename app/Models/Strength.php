<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strength extends Model 
{
    use HasFactory;

    protected $table = 'strengths';
    public $timestamps = true;

    protected $fillable = array(
        'title_en', 'title_jp',
        'image', 
        'description_en', 'description_jp', 
        'is_active', 
        'timestamps'
    );

}