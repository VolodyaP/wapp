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
    public function users(){
        return $this->hasMany('App\User');
    }

    /**
     * Function adding user to group
     * @param $user_ids array
     * @param $group_id int
     */
    public static function addUserToGroup($user_ids,$group_id){
        $result = false;
        if(count($user_ids) > 1 ){
            foreach($user_ids as $id){
                $user = User::find($id);
                $result[] = Group::find($group_id)->users()->save($user);
            }
        }
        else{
            $user = User::find($user_ids)->first();
            $result = Group::find($group_id)->users()->save($user);
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

    public function partners(){
        return $this->hasMany('App\Partner');
    }

    /**
     * @return mixed
     */
    public static function eventStatisticBuild(){

        $groups = Group::all();
        $data = array();
        foreach($groups as $k => $group){
            $data[$k]['group'] = $group->name;
            $data[$k]['event'] = count($group->events);
        }
        return json_encode($data);
    }
}
