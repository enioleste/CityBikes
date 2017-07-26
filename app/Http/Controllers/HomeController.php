<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function testeTemplate(){

        return view('admin_template');
    }

    public function testeLayout(){   
        return view('testandoLayout.testeLayout');
    }

    public function cadastroPaciente(){   
        return view('cadastros.cadastroPaciente');
    }
    public function fichaAnamnese(){
        return('oiii');
    }

}
