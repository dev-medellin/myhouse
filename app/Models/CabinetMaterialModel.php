<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinetMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'cabinet_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'marine_plywood',
            'kd_twelve',
            'fishing_nail_two',
            'fishing_nail_one',
            'cm_handle',
            'cm_concealed_hinges',
    ];


    public function insertData($data){

        
        $attr = [
            'marine_plywood'                         => $data['cab_type1'],
            'kd_twelve'                              => $data['cab_type2'],
            'fishing_nail_two'                       => $data['cab_type3'],
            'fishing_nail_one'                       => $data['cab_type4'], 
            'cm_handle'                              => $data['cab_type4'], 
            'cm_concealed_hinges'                    => $data['cab_type4'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
