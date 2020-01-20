<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    Protected $fillable = ['name','email','password'];
    protected $hidden = ['password','rememberToken'];
}
