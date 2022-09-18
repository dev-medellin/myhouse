<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaintingMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'painting_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'skim_coat',
            'flat_latex',
            'gloss_latex',
            'flat_wall_enamel',
            'pm_qde',
            'sanding_paper_one',
            'paint_thinner',

    ];


    public function insertData($data){

        
        $attr = [
            'skim_coat'                         => $data['pam_type1'],
            'flat_latex'                        => $data['pam_type2'],
            'gloss_latex'                       => $data['pam_type3'],
            'flat_wall_enamel'                  => $data['pam_type4'], 
            'pm_qde'                            => $data['pam_type5'], 
            'sanding_paper_one'                 => $data['pam_type6'], 
            'paint_thinner'                     => $data['pam_type7'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
