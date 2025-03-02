<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";

    public function setNameAttribute($value){

        $this->attributes['name'] = ucwords($value);
    } 

    public function getDobAttribute($value){
        return date("d-M-Y", strtotime($value));
    }
}
