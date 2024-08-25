<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $table = 'project_categories';
    public $timestamps = true;

    protected $fillable = [
        'title_en',
        'title_jp',
        'slug',
        'is_active'
    ];
}
