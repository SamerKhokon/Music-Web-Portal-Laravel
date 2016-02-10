<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBalancesModel extends Model
{

	protected $fillable = ['song_title','user_id','prev_balance','current_balance','used_balance','balance_renew_time','balance_end_time','balance_status','created_at','updated_at'];
    protected $table = "user_balances";
}
