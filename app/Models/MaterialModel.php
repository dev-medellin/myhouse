<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'proj_id',
        'materials_desc',
        'new_mat_desc'
    ];
}
