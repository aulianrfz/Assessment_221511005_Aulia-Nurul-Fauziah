<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
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

    public function tambahbarang()
    {
        $data = Barang::all();
        // dd($data);
        return view('tambahbarang', compact('data'));
    }

    public function insertdatabarang(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'barang.*.NamaBarang' => 'required|string',
            'barang.*.Satuan' => 'required|string',
            'barang.*.HargaSatuan' => 'required|numeric',
            'barang.*.Stok' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // dd($request->barang);

        // Buat entri barang terkait
        foreach ($request->barang as $dataBarang) {
            $lastId = Barang::max('id') + 1;

            // Format KodeBarang
            $kodeBarang = 'BRG221511005' . str_pad($lastId, 2, '0', STR_PAD_LEFT);

            Barang::updateOrCreate([
                'KodeBarang' => $kodeBarang,
                'NamaBarang' => $dataBarang['NamaBarang'],
                'Satuan' => $dataBarang['Satuan'],
                'HargaSatuan' => $dataBarang['HargaSatuan'],
                'Stok' => $dataBarang['Stok'],
            ]);
            ;
        }

        return redirect()->route('tambahbarang')->with('success', 'Data Berhasil di Simpan');
    }

    public function tampilbarang($id)
    {
        // dd($id);
        $barang = Barang::find($id)->get();
        return view('tampilbarang', compact('barang'));
    }

    public function updatedatabarang(Request $request, $id)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'barang.*.NamaBarang' => 'required|string',
            'barang.*.Satuan' => 'required|string',
            'barang.*.HargaSatuan' => 'required|numeric',
            'barang.*.Stok' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('barang')) {
            foreach ($request->barang as $barangId => $dataBarang) {
                $barang = Barang::find($barangId);

                if ($barang) {
                    // Memperbarui nilai-nilai pada model yang ditemukan
                    $barang->update([
                        'NamaBarang' => $dataBarang['NamaBarang'],
                        'Satuan' => $dataBarang['Satuan'],
                        'HargaSatuan' => $dataBarang['HargaSatuan'],
                        'Stok' => $dataBarang['Stok'],
                    ]);

                    // Memperbarui KodeBarang sesuai pola
                    $kodeBarang = 'BRG221511005'. str_pad($barang->id, 3, '0', STR_PAD_LEFT);
                    $barang->update(['KodeBarang' => $kodeBarang]);
                }
            }
        }

        return redirect()->route('tambahbarang')->with('success', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('tambahbarang');
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
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
