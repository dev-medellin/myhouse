<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorJambMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'door_jamb_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'dj_one_hundred',
            'dj_eighty',
            'sliding_dj_eighty',
            'los_pin_hinges',
            'door_nob',
    ];


    public function insertData($data){

        
        $attr = [
            'dj_one_hundred'                => $data['dj_type1'],
            'dj_eighty'                     => $data['dj_type2'],
            'sliding_dj_eighty'             => $data['dj_type3'],
            'los_pin_hinges'                => $data['dj_type4'], 
            'door_nob'                      => $data['dj_type4'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
