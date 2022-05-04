<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiConsumer extends Controller
{
    public function index(){
        $response = Http::get('https://viacep.com.br/ws/01001000/json/');
        dd($response);
    }
}
