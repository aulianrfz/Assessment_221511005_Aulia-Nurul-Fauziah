<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function tambahkasir()
    {
        $data = Kasir::all();
        // dd($data);
        return view('tambahkasir', compact('data'));
    }

    public function insertdataKasir(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'kasir.*.Nama' => 'required|string',
            'kasir.*.HP' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // dd($request->kasir);

        // Buat entri kasir terkait
        foreach ($request->kasir as $dataKasir) {
            $lastId = kasir::max('id') + 1;

            // Format Kodekasir
            $kodekasir = 'KS221511005' . str_pad($lastId, 2, '0', STR_PAD_LEFT);

            kasir::updateOrCreate([
                'Kodekasir' => $kodekasir,
                'Nama' => $dataKasir['Nama'],
                'HP' => $dataKasir['HP'],
            ]);
            ;
        }

        return redirect()->route('tambahkasir')->with('success', 'Data Berhasil di Simpan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kasir $kasir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kasir $kasir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kasir $kasir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kasir $kasir)
    {
        //
    }
}
