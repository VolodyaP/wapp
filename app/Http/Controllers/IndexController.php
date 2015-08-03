<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('user');
    }

    public function index()
    {
        $data['events'] = Event::getEvents();
        return view('index.index',$data);
    }


}
