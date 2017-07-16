<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class Produk extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    protected $fillable = ['title', 'description', 'content','image_1','image_2','image_3','image_4','price','status','keyword','tag'];
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
