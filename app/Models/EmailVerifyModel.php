<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerifyModel extends Model
{
    use HasFactory;

    protected $table        = 'verify_code';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'user_id',
        'email',
        'code',
    ];
}
