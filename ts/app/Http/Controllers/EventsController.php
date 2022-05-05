<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;
 class EventsController extends Controller{
        public function index()
        {
            $event = Events::all();
            return view('welcome',['event'=>$event]);
        }
    }