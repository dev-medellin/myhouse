<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustRoofMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'trust_roof_materials';
    protected $primaryKey   = 'id';
        
    protected $fillable = [
        'tubular_two_by_four',
        'tubular_two_by_two',
        'purlins_two_by_six',
        'expoxy_primer',
        'nihon_rod_special' ,
        'rib_type_four_by_eight',
        'gutter',
        'flashing_gutter',
        'txt_screw',
        'cylinder_silicon_sealant',
        'blind_rivets'      
    ];


    public function insertData($data){

        
        $attr = [
            'tubular_two_by_four'               => $data['trm_type1'],
            'tubular_two_by_two'                => $data['trm_type2'],
            'purlins_two_by_six'                => $data['trm_type3'],
            'expoxy_primer'                     => $data['trm_type4'],
            'nihon_rod_special'                 => $data['trm_type5'],
            'rib_type_four_by_eight'            => $data['trm_type6'],
            'gutter'                            => $data['trm_type7'],
            'flashing_gutter'                   => $data['trm_type8'],
            'txt_screw'                         => $data['trm_type9'],
            'cylinder_silicon_sealant'          => $data['trm_type10'],
            'blind_rivets'                      => $data['trm_type11']
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
