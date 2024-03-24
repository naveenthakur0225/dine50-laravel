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

    public function checkUserRole()
    {
        if (auth()->user()->role_id == 1) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role_id == 2) {
            return redirect()->route('staff.dashboard');
        } else {
            return redirect('/');
        }
    }
}
