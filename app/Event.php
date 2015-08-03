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
                            'place'
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
        $groups = $user->group;

        $events = array();
        foreach($groups as $k => $group){
            foreach($group->events as $event){
                $events[] = $event;
            }
        }
        return $events;
    }
}
