<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
       'vuser_id',
       'name','phone','email','gender','employee','department',
       'branch','auth','checkin','checkout','v_id','reason','locar',
       'image','approve','approve_by','checkoutfinal',
         
    ];
    public function vuser(){
    	return $this->belongsTo(Vuser::class,'vuser_id','id');
    }
   
}
