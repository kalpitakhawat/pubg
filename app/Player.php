<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';
    protected $fillable = ['username','profileurl'];

    public function score()
    {
    	return $this->hasOne('App\Score','username','username');
    }
}
