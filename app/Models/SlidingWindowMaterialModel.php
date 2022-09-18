<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlidingWindowMaterialModel extends Model
{
    use HasFactory;
    protected $table        = 'sliding_window_materials';
    protected $primaryKey   = 'id';
    protected $fillable = [
            'sixty_one_twenty',
            'one_twenty_one_twenty',
    ];


    public function insertData($data){

        
        $attr = [
            'sixty_one_twenty'                  => $data['swm_type1'],
            'one_twenty_one_twenty'             => $data['swm_type2'],
        ];

        $query = $this->updateOrCreate($attr);


        return $query;
    }
}
