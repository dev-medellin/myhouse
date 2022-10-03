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
}
