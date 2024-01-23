<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\plan;

class SelectPlanController extends Controller
{
    public function index()
    {
        
        $plans = Plan::Where(['status' => 'ACTIVE'])->get();
        return view('plan')->with(compact('plans')); 
    }
}
