<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlumbingSewerMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'plumbing_sewer_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'psl_pipe_four',
            'psl_pipe_three',
            'psl_pipe_two',
            'psl_pipe_wye_four',
            'psl_ptarp_two',
            'psl_clean_out_four',
            'psl_elbow_three',
            'psl_elbow_two',
            'solvent_cement'
    ];


    public function insertData($data){

        
        $attr = [
            'psl_pipe_four'                     => $data['psl_type1'],
            'psl_pipe_three'                    => $data['psl_type2'],
            'psl_pipe_two'                      => $data['psl_type3'],
            'psl_pipe_wye_four'                 => $data['psl_type4'], 
            'psl_ptarp_two'                     => $data['psl_type5'], 
            'psl_clean_out_four'                => $data['psl_type6'], 
            'psl_elbow_three'                   => $data['psl_type7'], 
            'psl_elbow_two'                     => $data['psl_type8'], 
            'solvent_cement'                    => $data['psl_type9'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
