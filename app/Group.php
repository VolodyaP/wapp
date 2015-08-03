<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = ['name'];

    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Function adding user to group
     * @param $user_ids array
     * @param $group_id int
     */
    public static function addUserToGroup($user_ids,$group_id){

        $group = Group::find($group_id);
        $result = false;
        foreach($user_ids as $user_id){
            $result = User::find($user_id)->group()->save($group);
        }
        return $result;
    }

    public static function getGroupAndUserCount(){
        $groups = self::all();
        foreach($groups as $group){
            $group->user_count = count($group->users);
        }
        return $groups;
    }

    public function events(){
        return $this->hasMany('App\Event');
    }
}
