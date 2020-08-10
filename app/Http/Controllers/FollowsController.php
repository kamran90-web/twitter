<?php

namespace App\Http\Controllers;
use App\User;
use App\Followable;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user) {
        auth()->user()->toggleFollow($user);
        return back();
    }
    
}
