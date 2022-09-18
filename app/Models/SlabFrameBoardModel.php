<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlabFrameBoardModel extends Model
{
    use HasFactory;
    protected $table        = 'slab_frame_board_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'coco_lumber_three',
            'coco_lumber_two',
            'cwn_four',
            'cwn_three',
            'cwn_two',
            'penolic_board'
    ];


    public function insertData($data){

        
        $attr = [
            'coco_lumber_three'     => $data['sfb_type1'],
            'coco_lumber_two'       => $data['sfb_type2'],
            'cwn_four'              => $data['sfb_type3'],
            'cwn_three'             => $data['sfb_type4'], 
            'cwn_two'               => $data['sfb_type5'], 
            'penolic_board'         => $data['sfb_type6'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
