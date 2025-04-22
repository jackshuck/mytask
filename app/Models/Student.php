<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ='students';
    protected $fillable=['name','trade','level','email','password','password_confirmation'];
}
