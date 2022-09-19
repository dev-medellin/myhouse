<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    protected $table        = 'projects';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'proj_name',
        'proj_area',
        'proj_type',
        'bed_room',
        'bath_room',
        'story',
        'status',
        'proj_description',
    ];
}
