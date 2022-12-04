<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonyModel extends Model
{
    use HasFactory;

    protected $table        = 'testimony';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'user_id',
        'email',
        'message',
        'status',
    ];

    public function getTestimonial(){

        $pending = self::select('testimony.*','users.fname as fname','users.lname as lname','users.id as uID')
                    ->leftJoin('users', 'users.id', '=', 'testimony.user_id')
                    ->where('testimony.status','pending')
                    ->get();
        
        $approved = self::select('testimony.*','users.fname as fname','users.lname as lname','users.id as uID')
                    ->leftJoin('users', 'users.id', '=', 'testimony.user_id')
                    ->where('testimony.status','approved')
                    ->get();

        $disapproved = self::select('testimony.*','users.fname as fname','users.lname as lname','users.id as uID')
                    ->leftJoin('users', 'users.id', '=', 'testimony.user_id')
                    ->where('testimony.status','approved')
                    ->get();

        return [
            'pending'         => $pending,
            'approved'      => $approved
        ];
    }
}
