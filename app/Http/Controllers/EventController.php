<?php

namespace App\Http\Controllers;

use App\Event;
use App\Partner;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    /**
     *
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $group = $user->group;
        $event = Event::create([
            'group_id'=>$group->id,
            'date'=>$request->date,
            'male_name'=>$request->male_name,
            'female_name'=>$request->female_name,
            'guests_count'=>$request->guests_count,
            'place'=>$request->place
        ]);

        return redirect(url('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $partners = Partner::buildPartnerResultByEvent($id);
        $data['event'] = $event;
        $data['partners'] = $partners;
        return view('event.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete(Request $request)
    {
        $message['status'] = 'error';
        if($request->ajax()){
            $event = Event::find($request->event_id);
            $event->delete();
            $message['status'] = 'success';
        }
        die(\Illuminate\Support\Facades\Response::json($message));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function partners($id){

        $data['event_id'] = $id;
        $data['partners'] = Partner::buildPartnerResult();
        return view('event.partner',$data);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function partnerAdd(Request $request,$id){
        $event = Event::find($id);
        foreach($request->partner_id as $p_id){
            Partner::find($p_id)->events()->save($event);
        }
        return redirect(url('/event/'.$id));
    }
}
