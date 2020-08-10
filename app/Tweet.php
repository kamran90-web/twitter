<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Tweet extends Model
{
    use Likable;
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }

    
}


// $id = $this->follows->pluck('id');
//         $id->push($this->id);
//         Tweet::where('user_id', $id)->latest()->get();