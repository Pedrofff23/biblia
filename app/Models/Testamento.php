<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testamento extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome' ];

    #         SE A PRIMARY KEY N FOR O ID
    //protected $primaryKey = "nome da primary key";

    #        SE N QUIZER SALVAR OS TIMESTAMPS
    //public $timeStamps = false;
}
