<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'telephone', 'city', 'state', 'born_date'
    ];


    public function plans(){
        return $this->belongsToMany('App\Plan', 'clients_has_plans');
    }

}
