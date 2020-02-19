<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cash';
    public $timestamps = true;

    public function projects(){
        return $this->belongsTo('App\Project');
    }
}
