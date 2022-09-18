<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetailsModel extends Model
{
    use HasFactory;
    protected $table        = 'project_details';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'proj_id',
        'sm_id',
        'wm_id',
        'trm_id',
        'sfb_id',
        'em_id',
        'cm_id',
        'pm_id',
        'ftm_id',
        'djm_id',
        'swm_id',
        'psl_id',
        'cab_id',
        'pam_id',
    ];
}
