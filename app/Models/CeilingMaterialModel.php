<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CeilingMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'ceiling_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'smart_board',
            'metal_furring',
            'blind_rivets',
            'dorner',
    ];


    public function insertData($data){

        
        $attr = [
            'smart_board'               => $data['cm_type1'],
            'metal_furring'             => $data['cm_type2'],
            'blind_rivets'              => $data['cm_type3'],
            'dorner'                    => $data['cm_type4'], 
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
