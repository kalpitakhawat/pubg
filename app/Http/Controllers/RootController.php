<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Player;
use App\Score;
class RootController extends Controller
{
    public function refreshData(Request $r)
    {
    	try {
	    	$client = new Client();
	    	$server = 'na';
	    	$mode = '1';
	    	$fpp_tpp = 'tpp';
	    	$score = Score::where('server',$server)->where('mode',$mode)->delete();
	    	$data = $client->get('https://pubg.op.gg/api/leaderboard/ranked-users?server='.$server.'&queue_size='.$mode.'&mode='.$fpp_tpp.'&limit=100');
	    	$data = json_decode($data->getBody()->getContents());
	    	$data = $data->items;
	    	foreach ($data as $key => $value) {
	    		$player = Player::updateOrCreate(['username'=>$value->user->nickname],['username'=>$value->user->nickname,'profileurl'=>$value->user->profile_url]);
	    		$score = Score::create([
	    			'username' => $value->user->nickname,
					'server'=>$server,
					'mode'=>$mode,
					'fpp_tpp' =>$fpp_tpp,
					'rank'=>$value->ranked_stats->ranks->rating,
					'grade'=>$value->ranked_stats->grade,
					'matches_cnt'=>$value->ranked_stats->stats->matches_cnt,
					'win_matches_cnt'=>number_format(($value->ranked_stats->stats->win_matches_cnt * 100)/$value->ranked_stats->stats->matches_cnt,'0'),
					'topten_matches_cnt'=>number_format(($value->ranked_stats->stats->topten_matches_cnt * 100)/$value->ranked_stats->stats->matches_cnt,'0'),
					'kills_sum'=>$value->ranked_stats->stats->kills_sum,
					'kills_max'=>$value->ranked_stats->stats->kills_max,
					'assists_sum'=>$value->ranked_stats->stats->assists_sum,
					'headshot_kills_sum'=>$value->ranked_stats->stats->headshot_kills_sum,
					'deaths_sum'=>$value->ranked_stats->stats->deaths_sum,
					'longest_kill_max'=>$value->ranked_stats->stats->longest_kill_max,
					'rank_avg'=>$value->ranked_stats->stats->rank_avg,
					'damage_dealt_avg'=>$value->ranked_stats->stats->damage_dealt_avg,
					'time_survived_avg'=>$value->ranked_stats->stats->time_survived_avg,
					'rating'=>$value->ranked_stats->stats->rating,

	    		]);	
	    	}

	    	dd('Done');
    	} catch (Exception $e) {
    		dd($e);
    	}
    }
    public function leaderboard(Request $r)
    {	
    	$server = !empty($r->server_name)?$r->server_name:'na';
    	$mode = !empty($r->mode)?$r->mode:'1';
    	$fpp_tpp = !empty($r->type)?$r->type:'tpp';
    	// die($server .'-'. $mode.'-'.$fpp_tpp);
    	$playerScores = Score::where('server',$server)->where('mode',$mode)->where('fpp_tpp',$fpp_tpp)->with(['player'])->get();
    	return view('leaderboard')->with('playerScores',$playerScores);
    }
}
