<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    protected $fillable = ['name','department','admin_id','total','employee_id','start','end','total_days','reason','stay','approve',
    'comment','return','sent'];

    use HasFactory;
    public function employee(){
    	return $this->belongsTo(User::class,'employee_id','id');
    }
    public function admin(){
    	return $this->belongsTo(User::class,'admin_id','id');
    }
}
