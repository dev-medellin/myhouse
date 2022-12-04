<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishListModel extends Model
{
    use HasFactory;
    protected $table        = 'user_wishlist';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'proj_id',
        'user_id',
    ];

    public function getWishlist(){
        return self::select('users.*','user_wishlist.user_id as wishUID','user_wishlist.id as wishID','user_wishlist.proj_id as projID','projects.*','projects.created_at as projCreated')
        ->leftJoin('users', 'users.id', '=', 'user_wishlist.user_id')
        ->leftJoin('projects', 'projects.id', '=', 'user_wishlist.proj_id')
        ->get();
    }
}
