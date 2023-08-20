<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Arr;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kategori.index', [
            'active' => 'kategori',
            'categories' => Kategori::orderBy('nama', 'desc')
                ->filter(request(['search']))
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori.create', [
            'active' => 'kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        $validated = $request->validated();
        Kategori::create($validated);
        return redirect('/dashboard/kategori')->with('success', 'Kategori Berita telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategori.edit', [
            'kategori' => $kategori,
            'active' => 'kategori',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        $validated = $request->validated();
        Kategori::where('id', $kategori['id'])->update($validated);

        return redirect('/dashboard/kategori')->with('success', 'Kategori telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/dashboard/kategori')->with('success', 'Kategori telah dihapus!');
    }
}
