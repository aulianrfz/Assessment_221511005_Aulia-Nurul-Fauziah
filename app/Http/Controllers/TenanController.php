<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TenanController extends Controller
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

    public function tambahtenan()
    {
        $data = Tenan::all();
        // dd($data);
        return view('tambahtenan', compact('data'));
    }

    public function insertdatatenan(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'tenan.*.NamaTenan' => 'required|string',
            'tenan.*.HP' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // dd($request->tenan);

        // Buat entri tenan terkait
        foreach ($request->tenan as $dataTenan) {
            $lastId = Tenan::max('id') + 1;

            // Format Kodetenan
            $kodetenan = 'TK221511005' . str_pad($lastId, 2, '0', STR_PAD_LEFT);

            Tenan::updateOrCreate([
                'KodeTenan' => $kodetenan,
                'NamaTenan' => $dataTenan['NamaTenan'],
                'HP' => $dataTenan['HP'],
            ]);
            ;
        }

        return redirect()->route('tambahtenan')->with('success', 'Data Berhasil di Simpan');
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
    public function show(Tenan $tenan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenan $tenan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenan $tenan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenan $tenan)
    {
        //
    }
}
