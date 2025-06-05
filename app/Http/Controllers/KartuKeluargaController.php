<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = KartuKeluarga::query();
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('no_kk', 'like', "%$q%")
                    ->orWhere('kepala_keluarga', 'like', "%$q%")
                    ->orWhere('alamat', 'like', "%$q%")
                    ->orWhere('rt_rw', 'like', "%$q%")
                    ->orWhere('kelurahan', 'like', "%$q%")
                    ->orWhere('kecamatan', 'like', "%$q%")
                    ->orWhere('kabupaten_kota', 'like', "%$q%")
                    ->orWhere('provinsi', 'like', "%$q%") ;
            });
        }
        if ($request->filled('kelurahan')) {
            $query->where('kelurahan', $request->kelurahan);
        }
        if ($request->filled('kecamatan')) {
            $query->where('kecamatan', $request->kecamatan);
        }
        $kks = $query->get();
        $kelurahans = KartuKeluarga::select('kelurahan')->distinct()->pluck('kelurahan');
        $kecamatans = KartuKeluarga::select('kecamatan')->distinct()->pluck('kecamatan');
        return view('kartu_keluarga.index', compact('kks', 'kelurahans', 'kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kartu_keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required|unique:kartu_keluargas',
            'kepala_keluarga' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
        ]);
        KartuKeluarga::create($request->all());
        return redirect()->route('kartu-keluarga.index')->with('success', 'Data KK berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KartuKeluarga $kartu_keluarga)
    {
        return view('kartu_keluarga.edit', compact('kartu_keluarga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KartuKeluarga $kartu_keluarga)
    {
        $request->validate([
            'no_kk' => 'required|unique:kartu_keluargas,no_kk,' . $kartu_keluarga->id,
            'kepala_keluarga' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
        ]);
        $kartu_keluarga->update($request->all());
        return redirect()->route('kartu-keluarga.index')->with('success', 'Data KK berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KartuKeluarga $kartu_keluarga)
    {
        $kartu_keluarga->delete();
        return redirect()->route('kartu-keluarga.index')->with('success', 'Data KK berhasil dihapus!');
    }

    /**
     * Export the data to CSV.
     */
    public function export(Request $request)
    {
        $query = KartuKeluarga::query();
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('no_kk', 'like', "%$q%")
                    ->orWhere('kepala_keluarga', 'like', "%$q%")
                    ->orWhere('alamat', 'like', "%$q%")
                    ->orWhere('rt_rw', 'like', "%$q%")
                    ->orWhere('kelurahan', 'like', "%$q%")
                    ->orWhere('kecamatan', 'like', "%$q%")
                    ->orWhere('kabupaten_kota', 'like', "%$q%")
                    ->orWhere('provinsi', 'like', "%$q%") ;
            });
        }
        if ($request->filled('kelurahan')) {
            $query->where('kelurahan', $request->kelurahan);
        }
        if ($request->filled('kecamatan')) {
            $query->where('kecamatan', $request->kecamatan);
        }
        $kks = $query->get();
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="kartu_keluarga_export.csv"',
        ];
        $columns = ['No KK','Kepala Keluarga','Alamat','RT/RW','Kelurahan','Kecamatan','Kabupaten/Kota','Provinsi'];
        $callback = function() use ($kks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($kks as $kk) {
                fputcsv($file, [
                    $kk->no_kk, $kk->kepala_keluarga, $kk->alamat, $kk->rt_rw, $kk->kelurahan, $kk->kecamatan, $kk->kabupaten_kota, $kk->provinsi
                ]);
            }
            fclose($file);
        };
        return new StreamedResponse($callback, 200, $headers);
    }
}
