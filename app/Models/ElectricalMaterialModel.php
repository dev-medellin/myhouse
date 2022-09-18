<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricalMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'electrical_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'panel_board',
            'c_breaker_sixty',
            'c_breaker_thirty',
            'c_breaker_twenty',
            'thwn_twelve',
            'thwn_fourteen',
            'thwn_teen',
            'puc_pipe',
            'ceiling_socket',
            'pin_lights',
            'single_switch',
            'three_gauge_switch',
            'two_gauge_switch',
            'c_outlet',
            'ac_outlet',

    ];


    public function insertData($data){

        
        $attr = [
            'panel_board'               =>$data['em_type1'],
            'c_breaker_sixty'           =>$data['em_type2'],
            'c_breaker_thirty'          =>$data['em_type3'],
            'c_breaker_twenty'          =>$data['em_type4'],
            'thwn_twelve'               =>$data['em_type5'],
            'thwn_fourteen'             =>$data['em_type6'],
            'thwn_teen'                 =>$data['em_type7'],
            'puc_pipe'                  =>$data['em_type8'],
            'ceiling_socket'            =>$data['em_type9'],
            'pin_lights'                =>$data['em_type10'],
            'single_switch'             =>$data['em_type11'],
            'three_gauge_switch'        =>$data['em_type12'],
            'two_gauge_switch'          =>$data['em_type13'],
            'c_outlet'                  =>$data['em_type14'],
            'ac_outlet'                 =>$data['em_type15'],
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
