<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Http\Requests\StoreAnnounceRequest;
use App\Http\Requests\UpdateAnnounceRequest;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.announce.index', [
            'active' => 'announce',
            'announces' => Announce::orderBy('judul', 'desc')
                ->filter(request(['search']))
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.announce.create', [
            'active' => 'announce',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnounceRequest $request)
    {
        $validated = $request->validated();
        Announce::create($validated);
        return redirect('/dashboard/announce')->with('success', 'Pengumuman telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announce $announce)
    {
        return view('dashboard.announce.preview', [
            'active' => 'announce',
            'announce' => $announce,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announce $announce)
    {
        return view('dashboard.announce.edit', [
            'announce' => $announce,
            'active' => 'announce',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnounceRequest $request, Announce $announce)
    {
        $validated = $request->validated();
        Announce::where('id', $announce->id)->update($validated);
        return redirect('/dashboard/announce')->with('success', 'Pengumuman telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announce $announce)
    {
        Announce::destroy($announce->id);
        return redirect('/dashboard/announce')->with('success', 'Pengumuman telah dihapus!');
    }
}
