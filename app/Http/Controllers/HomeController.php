<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    //
    $countryprojects = DB::table('projects')
        ->select('status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
        ->groupByRaw('projects.country_id')
        ->get();   

    return view('home', ['countryprojects' => $countryprojects]);
    }
}
