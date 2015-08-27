<?php

namespace App\Http\Controllers;

use App\Group;
use App\PartnerType;
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
        $data['users_list'] = User::where('active','=','0')->get();
        return view('admin.index',$data);
    }

    public function users()
    {
        $data['users_list'] = User::where('active','=','1')->get();
        return view('admin.users',$data);
    }

    public function usersApprove($id){
        $user = User::find($id);
        $user->active = 1;
        $user->save();
        return redirect(url('admin'));
    }

    public function usersReject($id){
        $user = User::find($id);
        $user->delete();
        return redirect(url('admin'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function partner(){
        $data['types'] = PartnerType::all();
        return view('admin.partner',$data);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function statistic(){
        $data['eventStatistic'] = Group::eventStatisticBuild();
        $data['staffStatistic'] = Group::buildGroupUsersCountStatistic();
        return view('admin.statistic',$data);
    }
}
