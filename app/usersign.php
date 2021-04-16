<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\usersign as Authenticatable;
use Illuminate\Notifications\Notifiable;

class usersign extends Model
{
    protected $fillable = [
        'email', 'password',
   ];
}
