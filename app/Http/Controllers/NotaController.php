<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NotaController extends Controller
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

    public function tambahnota()
    {
        $data = Nota::all();
        // dd($data);
        return view('tambahnota', compact('data'));
    }

    public function insertdatanota(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'nota.*.TglNota' => 'required|date',
            // 'nota.*.JamNota' => 'required|date_format:H:i:s',
            // 'nota.*.JumlahBelanja' => 'required|integer',
            // 'nota.*.Diskon' => 'required|integer',
            // 'nota.*.Total' => 'required|integer',
        ]);

        if ($validator->fails()) {
            dd($request->all());
            return back()->withErrors($validator)->withInput();
        }

        // dd($request->nota);

        // Buat entri nota terkait
        foreach ($request->nota as $dataNota) {
            $lastId = Nota::max('id') + 1;

            // Format Kodenota
            $kodenota = 'NO221511005' . str_pad($lastId, 2, '0', STR_PAD_LEFT);

            Nota::updateOrCreate([
                'KodeNota' => $kodenota,
                'TglNota' => $dataNota['TglNota'],
                'JamNota' => $dataNota['JamNota'],
                'JumlahBelanja' => $dataNota['JumlahBelanja'],
                'Diskon' => $dataNota['Diskon'],
                'Total' => $dataNota['JumlahBelanja'] * $dataNota['Diskon'],
            ]);
            ;
        }

        return redirect()->route('tambahnota')->with('success', 'Data Berhasil di Simpan');
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
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
