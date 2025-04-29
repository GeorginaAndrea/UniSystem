<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionConflictModal extends Component
{
    public $show = false;

    public function mount()
    {
        if (session()->has('session_conflict')) {
            $this->show = true;
        }
    }

    public function keepNewSession()
    {
        $user = Auth::user();
        DB::table('sessions')
            ->where('user_id', $user->id)
            ->where('id', '!=', session('pending_session_id'))
            ->delete();

        session()->forget('session_conflict');
        $this->show = false;
    }

    public function cancelNewSession()
    {
        DB::table('sessions')->where('id', session('pending_session_id'))->delete();

        Auth::logout();
        Session::flush();

        return redirect()->route('login')->withErrors(['login' => 'Inicio de sesión cancelado.']);
    }

    public function render()
    {
        return view('livewire.session-conflict-modal');
    }
}
