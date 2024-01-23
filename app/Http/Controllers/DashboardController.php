<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }

    // public function update($id)
    // {
    //    $author = User::find($id);
    //     return view('profile.profile')
    //       ->with(compact('author'));
    // }
    public function profile($id)
    {
        

        return view('profile.profile');
    }

    public function update(Request $request, $id)
    {
          $user = user::find($id);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        
            'phone_no' => $request->phone_no,
        ]);

        return redirect()->to('/dashboard');




      

        
    }
}
