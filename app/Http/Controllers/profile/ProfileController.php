<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;

class ProfileController extends Controller
{
    public function index($id) 
    {
        $profile = Auth::find('$id');
        return view('profile.profile')->with(compact('profile'));
    }
}
