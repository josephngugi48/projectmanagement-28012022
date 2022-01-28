<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectAPIController;


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

Route::get('/projects/all', [ProjectAPIController::class, 'index']);

Route::post('/projects/all', [ProjectAPIController::class, 'store']);

/*Route::post('/projects', function() {
    return Project::create([
        'projectid' => '1001',
        'projecttitle' => 'FSGLO10S05:Youth Empowerment for Urban Development',
        'paascode' => 'H139',
        'pagvalue' => '5,218,607',
        'startdate' => '01-Jan-12',
        'enddate' => '01-Dec-13',
        'donor' => 'BASF Stiftung, PM of Norway to the United Nations, The Palestinian Ministry of Public Works and Housing, , GROUP OF SPONSORS, PM OF NORWAY TO THE UNITED NATIONS',
        'totalexpenditure' => '5,439,757',
        'totalcontribution' => '5,329,257',
        'totalcontribution_totalexpenditure' => '-110,500',
        'totalpsc' => '316,548',
        'status_id' => '1',
        'fund_id' => '2',
        'country_id' => '3',
        'leadorgunit_id' => '1',
        'themes_id' => '2'
    ]);
});*/

//Route::resource('projects', ProjectController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
