<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pegawai::query();
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('nip', 'like', "%$q%")
                    ->orWhere('nama', 'like', "%$q%")
                    ->orWhere('jabatan', 'like', "%$q%")
                    ->orWhere('alamat', 'like', "%$q%")
                    ->orWhere('no_telepon', 'like', "%$q%")
                    ->orWhere('email', 'like', "%$q%") ;
            });
        }
        if ($request->filled('jabatan')) {
            $query->where('jabatan', $request->jabatan);
        }
        $pegawais = $query->get();
        $jabatans = Pegawai::select('jabatan')->distinct()->pluck('jabatan');
        return view('pegawai.index', compact('pegawais', 'jabatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais',
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
        ]);
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais,nip,' . $pegawai->id,
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
        ]);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Data karyawan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
