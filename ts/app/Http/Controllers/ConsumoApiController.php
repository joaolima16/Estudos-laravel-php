<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ConsumoApiController extends Controller
{
    public function index(){
        $response = Http::get('https://viacep.com.br/ws/01001000/json/');
        dd($response);
    }
};