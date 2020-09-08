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
    public function about()
    {
        return view('about');
    }
     public function services()
    {
        return view('services');
    }
     public function blog()
    {
        return view('blog');
    }
     public function contact()
    {
        return view('contact');
    }
    public function project()
    {
        return view('work');
    }
    public function skillExpert(Request $request)
    {   
        return view('skillFreelancer');
    }

}
