<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PositionsBrasil;

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
        $posicoes = PositionsBrasil::all();

        //return view('home');
        return view('home',[
            'posicoes' => $posicoes,
        ]);
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
