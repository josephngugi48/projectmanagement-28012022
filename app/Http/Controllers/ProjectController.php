<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Project;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        // 
        $themes = DB::table('themes')
            ->select('themes.id', 'themetitle', 'created_at')
            ->get(); 

        $orgunits = DB::table('org_units')
            ->select('org_units.id', 'orgunit', 'created_at')
            ->get(); 

        $funds = DB::table('funds')
            ->select('funds.id', 'fundscode', 'created_at')
            ->get(); 

        $countries = DB::table('countries')
            ->select('countries.id', 'countryname', 'created_at')
            ->get(); 

        return view('layouts.addproject', ['themes' => $themes, 'orgunits' => $orgunits, 'funds' => $funds, 'countries' => $countries]);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $req->validate([
        'pname'=> ['required'], 
        'paascode'=> ['required'],
        'pcode'=> ['required', 'string', 'min:4'],
        'pagvalue'=> ['required'],
        'donor'=> ['required'],
        'theme'=> ['required', 'integer','min:1'],
        'projectexp'=> ['required'],
        'projectcont'=> ['required'],
        'projectcontexp'=> ['required'],
        //'startdate'=> ['required'],
        ]);

        $user_id = Auth::user()->id;
        date_default_timezone_set('Africa/Nairobi'); 
        $datetime=date('Y-m-d h:i:s');

        /*'startdate',
        'enddate',
        'totalpsc'
        'status_id'
        'fund_id',
        'country_id',
        'leadorgunit_id',
        'theme_id'*/

        $front = new Project;
        $front->projecttitle = $req->pname;
        $front->projectid = $req->pcode;
        $front->paascode = $req->paascode;
        $front->pagvalue = $req->pagvalue;
        $front->donors = $req->donor;
        $front->theme_id = $req->theme;
        $front->totalexpenditure = $req->projectexp;
        $front->totalcontribution = $req->projectcont;
        $front->totalcontribution_totalexpenditure = $req->projectcontexp;
        $front->created_at = $datetime; 
        $front->save(); 

        return back()->with('success','Record successfully edited.');
        //return view('layouts.addproject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $projects = DB::table('projects')
            ->select('projects.id', 'status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure', 'created_at')
            ->where('projects.id','>','0')
            ->get();       

        return view('layouts.viewprojects', array('projects' => $projects));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        //
        $id=$id;

        $delusers = DB::table('projects')->where('id', '=', $id)->delete(); 

        $projects = DB::table('projects')
            ->select('projects.id', 'status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure', 'created_at')
            ->where('projects.id','>','0')
            ->get();

        //return view('layouts.registered', ['members' => $members]); 
        return back()->with('success','Record successfully deleted.');
    }
}
