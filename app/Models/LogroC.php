<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogroC extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='logrocs';
    protected $fillable=['nombres','cedula','partido','numlista','votos']; 
}
