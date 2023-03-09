<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table        = 'material_import';
    protected $primaryKey   = 'id';
    protected $fillable = [
        "material_category",
        "material_name",
        "material_pack",
        "material_price",
        "material_quantity",
        "project_id",
        "total_price"
    ];
}
