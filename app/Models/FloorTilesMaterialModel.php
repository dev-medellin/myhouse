<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorTilesMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'floor_tiles_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'granite_tile',
            'bath_room_floor',
            'bath_room_wall',
            'water_closet',
            'bath_tub',
            'labatory',
            'kitchen_sink',
            'grout',
            'adhesiv_cement',

    ];


    public function insertData($data){

        
        $attr = [
            'granite_tile'                      => $data['ftm_type1'],
            'bath_room_floor'                   => $data['ftm_type2'],
            'bath_room_wall'                    => $data['ftm_type3'],
            'water_closet'                      => $data['ftm_type4'], 
            'bath_tub'                          => $data['ftm_type5'], 
            'labatory'                          => $data['ftm_type6'], 
            'kitchen_sink'                      => $data['ftm_type7'], 
            'grout'                             => $data['ftm_type8'], 
            'adhesiv_cement'                    => $data['ftm_type9'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
