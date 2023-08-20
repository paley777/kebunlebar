<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Imports\UsersImport;
use Illuminate\Support\Arr;
use App\Http\Requests\UpdateUserRequest;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengguna.index', [
            'active' => 'users',
            'users' => User::orderBy('name', 'desc')
                ->filter(request(['search']))
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengguna.create', [
            'active' => 'users',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nip' => 'nullable|unique:users',
            'jabatan' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/dashboard/pengguna')->with('success', 'Pengguna telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $pengguna)
    {
        return view('dashboard.pengguna.edit', [
            'user' => $pengguna,
            'active' => 'users',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $pengguna)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        User::where('id', $pengguna['id'])->update($validated);

        return redirect('/dashboard/pengguna')->with('success', 'Pengguna telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $pengguna)
    {
        User::destroy($pengguna->id);
        return redirect('/dashboard/pengguna')->with('success', 'Pengguna telah dihapus!');
    }
}
