<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // if (Auth::check()) {
    //     //     return redirect('/plans');
    //     // }
    //     // else{
    //     //     return redirect()->to('login');
    //     // }
    //     // if (Auth::check() && Auth::user()) {
    //     //    return redirect('/plans');
    //     // }else {
    //     //     return redirect()->route('login');
    //     // } 
    //      if (Auth::check()) {
    //         $expireTime = Carbon::now()->addSecond(30);
    //         Cache::put('user-is-online'. Auth::user()->id, true ,$expireTime);
    //         User::where('id',Auth::user()->id)->update(['updated_at' => Carbon::now()]);
    //     }

        
    //     if (Auth::check() && Auth::user()) {
    //        return redirect('/plans');
    //     }else {
    //         return redirect()->route('login');
    //     }      
    // }

    public function handle(Request $request, Closure $next): Response
{
    if (Auth::check()) {
        // Update last activity timestamp and redirect to plans page
        $user = Auth::user();
        $user->update(['last_activity' => now()]);
        return redirect('/plans');
    }

    return redirect()->route('login');
}

}
