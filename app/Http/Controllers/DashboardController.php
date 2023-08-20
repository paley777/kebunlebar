<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kategori;
use App\Models\News;
use App\Models\Announce;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'countpengguna' => User::count(),
            'countkategori' => Kategori::count(),
            'countnews' => News::count(),
            'countpengumuman' => Announce::count(),
            'active' => 'index',
        ]);
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
