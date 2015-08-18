<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Navigation
{
    public static function build(User $user){

        $roles = array();

        foreach($user->roles as $role){
            $roles[] = $role->role;
        }

        if (in_array('admin', $roles)) {

            $html = '
                <li><a href="'. url('/admin') .'">BO</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'. Auth::user()->name .'<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. url('/auth/logout') .'">Logout</a></li>
                    </ul>
                </li>';

            return $html;

        }else{

            $html = '
                <li class="dropdown">
                    <a href="'.url('/').'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Події<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. url('event/create') .'">Створити Подію</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="'.url('partner').'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Партнери<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. url('partner/create') .'">Створити Партнера</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'. Auth::user()->name .'<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. url('/auth/logout') .'">Logout</a></li>
                    </ul>
                </li>';

            return $html;

        }
    }

    public static function getGroupName(){
        $group = Auth::user()->group;
        if(!$group)
            return '';
        else
            return $group->name;
    }



}