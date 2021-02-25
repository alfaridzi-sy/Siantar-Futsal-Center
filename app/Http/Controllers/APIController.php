<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lapangan;
use App\Futsal;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLapangan()
    {
        $lapangan = Lapangan::all();
        if ($lapangan != null) {
            $warning = "Data ditemukan";
        } else {
            $warning = "Data tidak ditemukan";
        }
        return response()->json(
            [
                "data_warning"  => $warning,
                "message"       => "Success",
                "data"          => $lapangan
            ]
        );
    }

    public function getFutsal()
    {
        $futsal = Futsal::all();
        if ($futsal != null) {
            $warning = "Data ditemukan";
        } else {
            $warning = "Data tidak ditemukan";
        }
        return response()->json(
            [
                "data_warning"  => $warning,
                "message"       => "Success",
                "data"          => $futsal
            ]
        );
    }
    public function getAllData()
    {
        $data = Futsal::with(['lapangan'])->orderBy('jumlah_view', 'desc')->get();
        if ($data != null) {
            $warning = "Data ditemukan";
        } else {
            $warning = "Data tidak ditemukan";
        }
        return response()->json(
            [
                "data_warning"  => $warning,
                "message"       => "Success",
                "data"          => $data
            ]
        );
    }
    
    public function akumulasiView(Request $request)
    {
        $data = Futsal::find($request->input('id_futsal'));
        if ($data != null) {
            $warning = "Data ditemukan";
            $message = "Success";
            $jumlah = $data->jumlah_view;
            $akumulasi = $jumlah + 1;
            $data->update(['jumlah_view' => $akumulasi]);
            
        } else {
            $warning = "Data tidak ditemukan";
            $message = "Failed";
        }
        return response()->json(
            [
                "data_warning"  => $warning,
                "message"       => $message,
                "data"          => $data
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
