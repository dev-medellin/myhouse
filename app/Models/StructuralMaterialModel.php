<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructuralMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'structural_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'gi_wire',
            'sixteen_deform_bar',
            'twelve_deform_bar',
            'ten_deform_bar',
            'nine_deform_bar',
    ];


    public function insertData($data){

        
        if($data['projType'] != 1){
            $attr = [
                'gi_wire'                           => $data['sm_type1'],
                'sixteen_deform_bar'                => $data['sm_type2'],
                'twelve_deform_bar'                 => $data['sm_type3'],
                'ten_deform_bar'                    => $data['sm_type4'],
                'nine_deform_bar'                   => $data['sm_type5'],
            ];
        }else{
            $attr = [
                'gi_wire'                           => $data['sm_type1'],
                'twelve_deform_bar'                 => $data['sm_type2'],
                'ten_deform_bar'                    => $data['sm_type3'],
                'nine_deform_bar'                   => $data['sm_type4'],
            ];
        }

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
