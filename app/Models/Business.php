<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model 
{
    use HasFactory;

    protected $table = 'business';
    public $timestamps = true;

    protected $fillable = array(
        'title_en', 'title_jp',
        'sub_title_en', 'sub_title_jp',
        'description_en', 'description_jp', 
        'is_active', 
        'timestamps'
    );

}