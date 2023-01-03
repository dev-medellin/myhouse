<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ContructorModel extends Model
{
    use HasFactory;
    protected $table        = 'contructor_list';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'comp_uid',
        'comp_name',
        'comp_slug',
        'comp_email',
        'comp_contact',
        'comp_desc',
        'comp_address',
        'comp_profile',
        'comp_watermark',
        'status'
    ];

    public function getSelf(){
        return self::where('comp_uid','=', Auth::user()->id)->first();
    }


    public function getList(){
        $list = self::where('status','=','approved')
                    ->where('comp_profile','!=','')
                    ->orderBy('id', 'DESC')
                    ->get();
        
                    return $list;
    }

    public function getSelected($slug){
        $query = self::where('comp_slug', $slug)->where('status','approved')->first();
        return  $query;
    }

    public function getContructors(){

        $pending = self::where('status','pending')
                    ->orderBy('id', 'DESC')
                    ->get();
        
        $approved = self::where('status','approved')
                    ->orderBy('id', 'DESC')
                    ->get();
        $declined = self::where('status','declined')
                    ->orderBy('id', 'DESC')
                    ->get();

        return [
            'pending'         => $pending,
            'approved'      => $approved,
            'declined'      => $declined
        ];
    }
}