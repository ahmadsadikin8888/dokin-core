<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class Slide extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    protected $fillable = ['title', 'description','image'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
