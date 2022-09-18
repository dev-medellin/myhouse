<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlumbingMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'plumbing_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'ppr_pipe',
            'ppr_elbow_with_thread',
            'ppr_elbow',
            'ppr_tee',
            'teflon_tape',
            'angel_bulb'
    ];


    public function insertData($data){

        
        $attr = [
            'ppr_pipe'                  => $data['pm_type1'],
            'ppr_elbow_with_thread'     => $data['pm_type2'],
            'ppr_elbow'                 => $data['pm_type3'],
            'ppr_tee'                   => $data['pm_type4'], 
            'teflon_tape'               => $data['pm_type5'], 
            'angel_bulb'                => $data['pm_type6'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
