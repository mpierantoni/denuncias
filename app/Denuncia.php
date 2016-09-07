<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $dates = ['acto_datetime', 'hecho_datetime'];
}
