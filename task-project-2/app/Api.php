<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Api extends Model 
{
    use HasApiTokens, Notifiable;
    
	//make:seeder
    
    protected $fillable = ['title','body'];

    protected $tables = 'users';

    protected $hidden = ['created_at','updated_at'];
}
