<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Gate;
use App\Models\News;
use App\Models\Kategori;
use Session;
use App\Models\Announce;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'active' => 'index',
            'newses' => News::latest()
                ->take(3)
                ->get(),
            'announces' => Announce::latest()
                ->take(5)
                ->get(),
        ]);
    }
    public function about()
    {
        return view('landing.about', [
            'active' => 'index',
        ]);
    }
    public function visimisi()
    {
        return view('landing.visimisi', [
            'active' => 'index',
        ]);
    }
    public function sejarahdesa()
    {
        return view('landing.sejarahdesa', [
            'active' => 'index',
        ]);
    }
    public function geografidesa()
    {
        return view('landing.geografidesa', [
            'active' => 'index',
        ]);
    }
    public function demografidesa()
    {
        return view('landing.demografidesa', [
            'active' => 'index',
        ]);
    }
    public function strukturdesa()
    {
        return view('landing.strukturdesa', [
            'active' => 'index',
        ]);
    }
    public function pemerintahandesa()
    {
        return view('landing.pemerintahandesa', [
            'active' => 'index',
        ]);
    }
    public function lembagadesa()
    {
        return view('landing.lembagadesa', [
            'active' => 'index',
        ]);
    }
    public function karangtaruna()
    {
        return view('landing.karangtaruna', [
            'active' => 'index',
        ]);
    }
    public function beritadesa()
    {
        return view('landing.beritadesa', [
            'active' => 'index',
            'newses' => News::orderBy('created_at', 'desc')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'categories' => Kategori::get(),
        ]);
    }
    public function beritadesa_cat(Kategori $category)
    {
        return view('landing.beritadesacat', [
            'active' => 'index',
            'newses' => News::where('kategori', $category->nama)
                ->orderBy('created_at', 'desc')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'categories' => Kategori::get(),
            'cat' => $category,
        ]);
    }
    public function pengumuman()
    {
        return view('landing.pengumuman', [
            'active' => 'index',
            'announces' => Announce::orderBy('created_at', 'desc')
                ->filter(request(['search']))
                ->paginate(15)
                ->withQueryString(),
        ]);
    }
    public function unduhan()
    {
        return view('landing.unduhan', [
            'active' => 'index',
        ]);
    }
    public function produkhukum()
    {
        return view('landing.produkhukum', [
            'active' => 'index',
        ]);
    }
    public function apbdes()
    {
        return view('landing.apbdes', [
            'active' => 'index',
        ]);
    }
    public function beritadesa_detail(News $news)
    {
        return view('landing.beritadesadetail', [
            'news' => $news,
            'active' => 'news',
            'categories' => Kategori::get(),
        ]);
    }
    public function pengumuman_detail(Announce $announce)
    {
        return view('landing.pengumumandetail', [
            'active' => 'index',
            'announce' => $announce,
        ]);
    }
    public function login()
    {
        return view('landing.login', [
            'active' => 'login',
        ]);
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()
                ->intended('/dashboard')
                ->with('success', 'Selamat Datang di Dashboard Sistem Informasi Desa Kebun Lebar!');
        }
        return back()->with('loginError', 'E-mail/Password Anda Salah, Coba Lagi!');
    }
}
