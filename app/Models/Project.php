<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'projectid',
        'projecttitle',
        'paascode',
        'pagvalue',
        'startdate',
        'enddate',
        'donor',
        'totalexpenditure',
        'totalcontribution',
        'totalcontribution_totalexpenditure'
        'totalpsc'
        'status_id'
        'fund_id',
        'country_id',
        'leadorgunit_id',
        'themes_id'
    ];
    
}
