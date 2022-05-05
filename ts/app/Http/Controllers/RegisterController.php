<?php
    namespace App\Http\Controllers;
    use App\Models\Register;
    class RegisterController extends Controller
    {
        public function index()
        {
            $Alunos = Register::all();
            return view('welcome',['alunos'=>$Alunos]);
        }
    }