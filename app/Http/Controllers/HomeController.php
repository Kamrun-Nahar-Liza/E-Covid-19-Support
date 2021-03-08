<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function doctorindex()
    {
        return view('doctor');
    }

     public function patientindex()
    {
        return view('patient');
    }

    public function plasmadonorindex()
    {
        return view('plasmadonor');
    }

    public function adminindex()
    {
        return view('admin');
    }
}
