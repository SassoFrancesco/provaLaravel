<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Prova extends Model
{
    protected $table = "dati";

    protected $primaryKey = "id";

    public $timestamps = false;

}
