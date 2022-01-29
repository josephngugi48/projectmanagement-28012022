<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectAPIController;

//use App\Models\Project;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/projects/{id}', [ProjectAPIController::class, 'index']);

Route::post('/projects/all', [ProjectAPIController::class, 'store']);

Route::get('/projects/country/{id}', [ProjectAPIController::class, 'showCountry']); 

Route::get('/projects/ApprovalStatus/{id}', [ProjectAPIController::class, 'approvalStatus']); 

/*Route::post('/projects', function() {
    return Project::create([
        'projectid' => '1002',
        'projecttitle' => 'FSGLO10S05:Youth Empowerment for Urban Development',
        'paascode' => 'H139',
        'pagvalue' => '5218607.00',
        'startdate' => '01-Jan-12',
        'enddate' => '01-Dec-13',
        'donor' => 'BASF Stiftung, PM of Norway to the United Nations, The Palestinian Ministry of Public Works and Housing, , GROUP OF SPONSORS, PM OF NORWAY TO THE UNITED NATIONS',
        'totalexpenditure' => '5439757',
        'totalcontribution' => '5329257',
        'totalcontribution_totalexpenditure' => '-110500',
        'totalpsc' => '316548',
        'status_id' => '1',
        'fund_id' => '1',
        'country_id' => '2',
        'leadorgunit_id' => '2',
        'themes_id' => '1'
    ]);
});*/

//Route::resource('projects', ProjectController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
