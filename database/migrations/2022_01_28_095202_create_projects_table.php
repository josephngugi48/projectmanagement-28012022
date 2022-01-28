<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('project_statuses');
            $table->unsignedBigInteger('fund_id');
            $table->foreign('fund_id')->references('id')->on('funds');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('leadorgunit_id');
            $table->foreign('leadorgunit_id')->references('id')->on('org_units');
            $table->unsignedBigInteger('theme_id');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->string('projectid');
            $table->string('projecttitle');
            $table->string('paascode');
            $table->decimal('pagvalue', 12, 2)->default('0.00');
            $table->string('donors');
            $table->decimal('totalexpenditure', 12, 2)->default('0.00');
            $table->decimal('totalcontribution', 12, 2)->default('0.00');
            $table->decimal('totalcontribution_totalexpenditure', 12, 2)->default('0.00');
            $table->string('totalpsc')->default('0.00');
            $table->datetime('startdate')->default('0000-00-00 00:00:00');
            $table->datetime('enddate')->default('0000-00-00 00:00:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
