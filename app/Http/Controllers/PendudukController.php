<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Penduduk::query();
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('nik', 'like', "%$q%")
                    ->orWhere('nama', 'like', "%$q%")
                    ->orWhere('alamat', 'like', "%$q%")
                    ->orWhere('pekerjaan', 'like', "%$q%")
                    ->orWhere('pendidikan', 'like', "%$q%")
                    ->orWhere('agama', 'like', "%$q%")
                    ->orWhere('tempat_lahir', 'like', "%$q%")
                    ->orWhere('tanggal_lahir', 'like', "%$q%")
                    ->orWhere('jenis_kelamin', 'like', "%$q%") ;
            });
        }
        if ($request->filled('jk')) {
            $query->where('jenis_kelamin', $request->jk);
        }
        if ($request->filled('agama')) {
            $query->where('agama', $request->agama);
        }
        $penduduks = $query->get();
        $agamas = Penduduk::select('agama')->distinct()->pluck('agama');
        return view('penduduk.index', compact('penduduks', 'agamas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:penduduks',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
        Penduduk::create($request->all());
        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nik' => 'required|unique:penduduks,nik,' . $penduduk->id,
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
        $penduduk->update($request->all());
        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil dihapus!');
    }

    /**
     * Export the data to CSV.
     */
    public function export(Request $request)
    {
        $query = Penduduk::query();
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('nik', 'like', "%$q%")
                    ->orWhere('nama', 'like', "%$q%")
                    ->orWhere('alamat', 'like', "%$q%")
                    ->orWhere('pekerjaan', 'like', "%$q%")
                    ->orWhere('pendidikan', 'like', "%$q%")
                    ->orWhere('agama', 'like', "%$q%")
                    ->orWhere('tempat_lahir', 'like', "%$q%")
                    ->orWhere('tanggal_lahir', 'like', "%$q%")
                    ->orWhere('jenis_kelamin', 'like', "%$q%") ;
            });
        }
        if ($request->filled('jk')) {
            $query->where('jenis_kelamin', $request->jk);
        }
        if ($request->filled('agama')) {
            $query->where('agama', $request->agama);
        }
        $penduduks = $query->get();
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="penduduk_export.csv"',
        ];
        $columns = ['NIK','Nama','Jenis Kelamin','Tempat Lahir','Tanggal Lahir','Agama','Pendidikan','Pekerjaan','Alamat'];
        $callback = function() use ($penduduks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($penduduks as $p) {
                fputcsv($file, [
                    $p->nik, $p->nama, $p->jenis_kelamin, $p->tempat_lahir, $p->tanggal_lahir, $p->agama, $p->pendidikan, $p->pekerjaan, $p->alamat
                ]);
            }
            fclose($file);
        };
        return new StreamedResponse($callback, 200, $headers);
    }
}
