<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    /**
     * @var string
     */
    protected $table = 'partners';

    /**
     * @var array
     */
    protected $fillable = ['email','phone','name','type_id','group_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events(){
        return $this-> belongsToMany('App\Event');
    }
}
