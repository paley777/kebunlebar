<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Kategori;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Session;
use Illuminate\Http\Request;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.news.index', [
            'active' => 'news',
            'newses' => News::orderBy('judul', 'desc')
                ->filter(request(['search']))
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create', [
            'active' => 'news',
            'categories' => Kategori::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validated = $request->validated();
        $validated['thumbnail'] = $request->file('thumbnail');
        $validated['thumbnail']->move(public_path() . '/images/', $img = 'img_' . Str::random(15) . '.jpg');
        $validated['thumbnail'] = $img;
        News::create($validated);
        return redirect('/dashboard/news')->with('success', 'Berita telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('dashboard.news.preview', [
            'active' => 'news',
            'news' => $news,
            'categories' => Kategori::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', [
            'news' => $news,
            'active' => 'news',
            'categories' => Kategori::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        if ($request->thumbnail == null) {
            $validated = $request->validated();
            $validated['thumbnail'] = $news->thumbnail;
            News::where('id', $news->id)->update($validated);
        } else {
            File::delete('images/' . $news['thumbnail']);
            $validated = $request->validated();
            $validated['thumbnail'] = $request->file('thumbnail');
            $validated['thumbnail']->move(public_path() . '/images/', $img = 'img_' . Str::random(15) . '.jpg');
            $validated['thumbnail'] = $img;
            News::where('id', $news->id)->update($validated);
        }
        return redirect('/dashboard/news')->with('success', 'Berita telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        File::delete('images/' . $news['thumbnail']);
        News::destroy($news->id);
        return redirect('/dashboard/news')->with('success', 'Berita telah dihapus!');
    }
}
