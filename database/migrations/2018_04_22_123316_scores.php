<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('server')->nullable();
            $table->string('mode')->nullable();
            $table->string('rank')->nullable();
            $table->string('fpp_tpp')->nullable();
            $table->string('grade')->nullable();
            $table->string('matches_cnt')->nullable();
            $table->string('win_matches_cnt')->nullable();
            $table->string('topten_matches_cnt')->nullable();
            $table->string('kills_sum')->nullable();
            $table->string('kills_max')->nullable();
            $table->string('assists_sum')->nullable();
            $table->string('headshot_kills_sum')->nullable();
            $table->string('deaths_sum')->nullable();
            $table->string('longest_kill_max')->nullable();
            $table->string('rank_avg')->nullable();
            $table->string('damage_dealt_avg')->nullable();
            $table->string('time_survived_avg')->nullable();
            $table->string('rating')->nullable();
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
        //
    }
}
