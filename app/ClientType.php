<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    protected $table = 'clienttype';
    public $timestamps = true;

    public function projects(){
        return $this->hasMany('App\Project', 'clientId');
    }
}
