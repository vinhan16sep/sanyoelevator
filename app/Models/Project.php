<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    protected $fillable = array(
        'project_category_id', 
        'title_en', 'title_jp', 'slug', 
        'image', 
        'description_en', 'description_jp', 
        'content_en', 'content_jp', 
        'is_active', 
        'timestamps'
    );

    public function project_category() {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id', 'id');
    }

}