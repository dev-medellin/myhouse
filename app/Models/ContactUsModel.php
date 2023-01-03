<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsModel extends Model
{
    use HasFactory;
    protected $table        = 'contact_us';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'user_id',
        'email',
        'message_to',
        'full_name',
        'message',
        'phone_no',
        'status',
    ];
}
