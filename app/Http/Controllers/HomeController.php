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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function faqs()
    {
        return view('site.faqs');
    }
    
    public function ia()
    {
        return view('site.ias');
    }

    public function jogos()
    {
        return view('site.jogos');
    }

    public function linguagens()
    {
        return view('site.linguagens');
    }

    public function tendencias()
    {
        return view('site.tendencias');
    }
}
