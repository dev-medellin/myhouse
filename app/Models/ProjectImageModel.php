<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImageModel extends Model
{
    use HasFactory;
    protected $table        = 'project_images';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'proj_id',
        'image_path',
    ];
}
