<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $data['groups_list'] = Group::all(['name']);
        $data['users_list'] = User::all(['name','email']);

        return view('admin.index',$data);
    }

}
