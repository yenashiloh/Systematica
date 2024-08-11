<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserRegistration extends Authenticatable
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'user_registration';

    // The primary key associated with the table
    protected $primaryKey = 'user_id';

    // Indicates if the IDs are auto-incrementing
    public $incrementing = true;

    // The data type of the primary key
    protected $keyType = 'int';

    // Indicates if the model should be timestamped
    public $timestamps = true;

    // The attributes that are mass assignable
    protected $fillable = [
        'username',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'birthdate',
        'password',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [
        'password',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'birthdate' => 'date',
    ];
}

