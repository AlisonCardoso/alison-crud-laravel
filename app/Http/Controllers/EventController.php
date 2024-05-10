<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
       // $events = Event::orderBy("created_at","desc")->paginate(10);
    }


    public function create()
    {
        return view("events/create");
    }
}
