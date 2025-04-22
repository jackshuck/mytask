<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachersub extends Model
{
    use HasFactory;
    protected $table='teachersubs';
    protected $fillable = ['subname','topic','notes','depart'];
}
