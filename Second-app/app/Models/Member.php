<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;

  /*  function getnameAttribute($value)
    {
        return ucFirst($value);
    }

    function getAddressAttribute($value)
    {
        return $value. ", India";
    }
*/
    public  function setNameAttribute($value)
    {
        return $this->attributes['name']='Mr. '. $value;
    }

    public  function setAddressAttribute($value)
    {
        return $this->attributes['address']= $value. ", India";
    }

    function companyData()
    {
        return $this->hasOne('App\Models\Company');
    }

    
    function getDevice()
    {
        return $this->hasMany('App\Models\Device');
    }

    
}
