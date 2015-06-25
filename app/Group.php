<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany('App\Users');
    }
}
