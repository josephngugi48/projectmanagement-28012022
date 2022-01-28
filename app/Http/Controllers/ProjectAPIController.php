<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Project;

class ProjectAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        //
        return Project::all();
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
        //
        return Project::create($request->all());
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
        $reqname=$id;
        //
        $projects = DB::table('projects')
            ->join('countries', 'countries.id', '=', 'projects.id')
            ->select('status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
            ->where('countries.countryname','=',$reqname)
            ->get();

        return $projects;
        }

    public function showCountry(Request $request, $id)
        {
        $reqname=$id;

        if( (!is_numeric($reqname)) && (strlen($reqname)>1) )
            {
            //
            $projects = DB::table('projects')
                ->join('countries', 'countries.id', '=', 'projects.country_id')
                ->select('countries.countryname','status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
                ->where('countries.countryname','=',$reqname)
                ->get();
            } else if( (is_numeric($reqname)) && (strlen($reqname)>0) )
                {
                //
                $projects = DB::table('projects')
                    ->join('countries', 'countries.id', '=', 'projects.country_id')
                    ->select('countries.countryname','status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
                    ->where('countries.id','=',$reqname)
                    ->get();
                } else if( (!isset($reqname)) || ($reqname=='') )
                    {
                    //
                    $projects = DB::table('projects')
                        ->join('countries', 'countries.id', '=', 'projects.country_id')
                        ->select('countries.countryname','status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
                        ->get();
                    }

        return $projects;
        }

    public function approvalStatus(Request $request, $id)
        {
        $reqname=$id;

        if( (!is_numeric($reqname)) && (strlen($reqname)>1) )
            {
            //
            $projects = DB::table('projects')
                ->join('project_statuses', 'project_statuses.id', '=', 'projects.status_id')
                ->select('project_statuses.statusname','status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
                ->where('project_statuses.statusname','=',$reqname)
                ->get();
            } else if( (is_numeric($reqname)) && (strlen($reqname)>0) )
                {
                //
                $projects = DB::table('projects')
                    ->join('project_statuses', 'project_statuses.id', '=', 'projects.status_id')
                    ->select('project_statuses.statusname','status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
                    ->where('projects.status_id','=',$reqname)
                    ->get();
                } else if( (!isset($reqname)) || ($reqname=='') )
                    {
                    //
                    $projects = DB::table('projects')
                        ->join('project_statuses', 'project_statuses.id', '=', 'projects.status_id')
                        ->select('project_statuses.statusname','status_id', 'projectid', 'projecttitle', 'paascode', 'pagvalue', 'donors', 'totalexpenditure', 'totalcontribution', 'totalcontribution_totalexpenditure')
                        ->get();
                    }

        return $projects;
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
    public function destroy($id)
    {
        //
    }
}
