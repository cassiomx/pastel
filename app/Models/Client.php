<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','email','phone','dateofbirth','address','complement','neighborhood','zipecode'];


    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
}
