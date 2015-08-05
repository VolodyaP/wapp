<?php

namespace App\Http\Controllers;

use App\Partner;
use App\PartnerType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['partners'] = Partner::all();
        $data['types'] = PartnerType::all();

        return view('partner.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
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
        $partner = Partner::create([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'phone'=> $request->phone,
                    'type_id'=> $request->type
                    ]);
        dump($partner);

        return redirect(url('partner'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    /**
     *
     */
    public function typeCreate(){
        return view('partner.typeCreate');
    }

    public function typeStore(Request $request){

        $type = PartnerType::create([
            'name' => $request->type
        ]);

        dump($type);

        return redirect(url('partner'));
    }
}
