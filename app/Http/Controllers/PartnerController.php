<?php

namespace App\Http\Controllers;

use App\Event;
use App\Partner;
use App\PartnerType;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $partners = Partner::buildPartnerResult();
        $data['partners'] = $partners;

        return view('partner.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
//        $user = Auth::user();
//        $user = $user->group;
        $data['partners_type'] = PartnerType::all();
        return view('partner.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::create([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'phone'=> $request->phone,
                    'type_id'=> $request->type,
                    'group_id'=>$user->group->id
                    ]);

        return redirect(url('partner'));
    }


    /**
     *
     */
    public function typeCreate(){
        return view('partner.typeCreate');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function typeStore(Request $request){

        $type = PartnerType::create([
            'name' => $request->type
        ]);

        return redirect(url('admin/partner/type'));
    }
}
