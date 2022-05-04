<?php

use App\Http\Controllers\Controller;
use App\Models\Event;
class EventController extends Controller{
    public function index(){
        $event = Event::all();
        return view('events.index')->with(['event' => $event]);
    }
    public function create() {
            return view('events.create');
    }
}