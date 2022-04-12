<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
   
    public $timestamps = false; 
    protected $fillable = ['documento_identidad','nombre','apellido','email','telefono'];
}
