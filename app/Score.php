<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';
    protected $fillable = ['username','server', 'mode', 'fpp_tpp','rank', 'grade', 'matches_cnt', 'win_matches_cnt', 'topten_matches_cnt', 'kills_sum', 'kills_max', 'assists_sum', 'headshot_kills_sum', 'deaths_sum', 'longest_kill_max', 'rank_avg', 'damage_dealt_avg', 'time_survived_avg', 'rating'];

     public function player()
    {
    	return $this->belongsTo('App\Player','username','username')->select('username','profileurl');
    }
}
