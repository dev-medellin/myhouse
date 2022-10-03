<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectModel;

class UsersModel extends Model
{

    protected $table        = 'users';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'email',
        'password',
        'contact',
        'fname',
        'lname',
        'role'
    ];


    public function getUsersInfo(){
       return self::selectRaw('users.* ,count(user_wishlist.user_id) as wishlist')
            ->leftJoin('user_wishlist','users.id','=','user_wishlist.user_id')
            ->where('status','active')
            ->groupBy('users.id')
            ->get();
    }

    public function getUsersWishInfo($id){
        
        $users = self::select('*')
                    ->where('email_status','verified')
                    ->where('status','active')
                    ->where('id',$id)
                    ->first()->makeHidden(['password']);

        $projects = ProjectModel::select('projects.*','user_wishlist.user_id','user_wishlist.proj_id')
                    ->leftJoin('user_wishlist','projects.id','=','user_wishlist.proj_id')
                    // ->leftJoin('projects','user_wishlist.proj_id','=','projects.id')
                    ->where('projects.status','active')
                    ->where('user_wishlist.user_id',$id)
                    ->get();
        return [
            'users'         => $users,
            'projects'      => $projects
        ];
    }
}
