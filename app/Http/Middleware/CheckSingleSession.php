<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckSingleSession
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $currentSession = session()->getId();
            $activeSessions = DB::table('sessions')
                ->where('user_id', Auth::id())
                ->where('id', '!=', $currentSession)
                ->count();

            if ($activeSessions > 0) {
                $request->session()->put('session_conflict', true);
                return redirect()->route('session.conflict');
            }
        }

        return $next($request);
    }
}