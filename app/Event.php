<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    /**
     * @var string
     */
    protected $table = 'events';

    /**
     * @var array
     */
    protected $fillable = [
                            'male_name',
                            'female_name',
                            'date',
                            'guests_count',
                            'place',
                            'group_id'
    ];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group(){

        return $this->belongsTo('App\Group');
    }

    public static function getEvents(){

        $user = Auth::user();
        $group = $user->group;
        $events = array();
        if($group){
                foreach($group->events as $event){
                    $events[] = $event;
                }
            return $events;
        }

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partners(){
        return $this-> belongsToMany('App\Partner');
    }
}
