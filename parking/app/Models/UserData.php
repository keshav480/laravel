<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // This is crucial
use Illuminate\Notifications\Notifiable;

class UserData extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'datas';

    // Any other properties or methods needed for your UserData model can go here
}
