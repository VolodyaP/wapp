<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function type(){
        return $this->belongsTo('App\PartnerType');
    }

    /**
     * @return mixed
     */
    public static function buildPartnerResult(){

        $user = Auth::user();
        $group = $user->group;

        foreach($group->partners as $partner){

            $partner->type = $partner->type->name;
        }
        return $group->partners;
    }
}

