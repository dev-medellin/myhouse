<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectModel as Project;

class HomeModel extends Model
{
    use HasFactory;


    public function getData(){
        
        $get_project = Project::where('status','active')
                                ->groupBy('proj_type')
                                ->orderBy('created_at','desc')
                                ->get();


        return [
            'project' => $get_project
        ];
    }
}
