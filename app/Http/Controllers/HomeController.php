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

    public function history()
    {
        return view('frontviews.about.history');
    }

    public function mission()
    {
        return view('frontviews.about.mission');
    }

    public function evangelism()
    {
        return view('frontviews.ministries.evangelism');
    }

    public function orphanage()
    {
        return view('frontviews.ministries.orphanage');
    }

    public function widows()
    {
        return view('frontviews.ministries.widows');
    }

    public function praise()
    {
        return view('frontviews.ministries.praise');
    }

    public function childrens()
    {
        return view('frontviews.ministries.childrens');
    }

}
