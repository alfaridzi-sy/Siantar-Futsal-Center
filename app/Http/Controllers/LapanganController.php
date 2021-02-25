<?php

namespace App\Http\Controllers;

use App\Lapangan;
use App\Futsal;
use Illuminate\Http\Request;

class LapanganController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lapangan = Lapangan::all();
        return view('lapangan.index', ["lapangans" => $lapangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $futsal = Futsal::all();
        return view('lapangan.create', ["futsals" => $futsal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lapangan = Lapangan::create($request->all());
        if ($request->hasFile('foto1')) {
            $foto1 = $request->foto1->getClientOriginalName();
            $request->foto1->storeAs('lapangan', $foto1, 'public');
            $lapangan->update(['foto1' => $foto1]);
        }
        if ($request->hasFile('foto2')) {
            $foto2 = $request->foto2->getClientOriginalName();
            $request->foto2->storeAs('lapangan', $foto2, 'public');
            $lapangan->update(['foto2' => $foto2]);
        }
        if ($request->hasFile('foto3')) {
            $foto3 = $request->foto3->getClientOriginalName();
            $request->foto3->storeAs('lapangan', $foto3, 'public');
            $lapangan->update(['foto3' => $foto3]);
        }
        return redirect('/lapangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function show($id_lapangan)
    {
        $lapangan = Lapangan::find($id_lapangan);
        return view('lapangan.show', ["lapangans" => $lapangan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_lapangan)
    {
        $lapangan   = Lapangan::find($id_lapangan);
        $futsal     = Futsal::all();
        return view('lapangan.edit', ["lapangans" => $lapangan, "futsals" => $futsal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_lapangan)
    {
        $lapangan = Lapangan::find($id_lapangan);
        $lapangan->update($request->all());
        if ($request->hasFile('foto1')) {
            $foto1 = $request->foto1->getClientOriginalName();
            $request->foto1->storeAs('lapangan', $foto1, 'public');
            $lapangan->update(['foto1' => $foto1]);
        }
        if ($request->hasFile('foto2')) {
            $foto2 = $request->foto2->getClientOriginalName();
            $request->foto2->storeAs('lapangan', $foto2, 'public');
            $lapangan->update(['foto2' => $foto2]);
        }
        if ($request->hasFile('foto3')) {
            $foto3 = $request->foto3->getClientOriginalName();
            $request->foto3->storeAs('lapangan', $foto3, 'public');
            $lapangan->update(['foto3' => $foto3]);
        }
        return redirect('/lapangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_lapangan)
    {
        Lapangan::destroy($id_lapangan);
        return redirect('/lapangan');
    }
}
