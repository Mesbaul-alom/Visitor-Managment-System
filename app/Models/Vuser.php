<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'image',
    ];
    public function visitor(){
        return $this->hasMany(Visitor::class,'vuser_id','id');
   }

}
