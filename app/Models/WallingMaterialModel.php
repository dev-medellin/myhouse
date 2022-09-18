<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallingMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'walling_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'concrete_hallow_blocks',
            'cement',
            's_one_sand',
            'gravel_three_four'
    ];


    public function insertData($data){

        
        $attr = [
            'concrete_hallow_blocks'    => $data['wm_type1'],
            'cement'                    => $data['wm_type2'],
            's_one_sand'                => $data['wm_type3'],
            'gravel_three_four'         => $data['wm_type4'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
