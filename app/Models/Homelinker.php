<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class homelinker extends Authenticatable 
{
    use Notifiable;
    //
    /** @use HasFactory<\Database\Factories\HomelinkerFactory> */
    use HasFactory;
}
