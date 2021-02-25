<?php

namespace App\Http\Controllers;

use App\Futsal;
use Illuminate\Http\Request;

class FutsalController extends Controller
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
        $futsal = Futsal::all();
        return view('futsal.index', ["futsals" => $futsal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('futsal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $futsal = Futsal::create($request->all());
        if ($request->hasFile('foto')) {
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('futsal', $filename, 'public');
            $futsal->update(['foto' => $filename]);
        }
        return redirect('/futsal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show($id_futsal)
    {
        $futsal = Futsal::find($id_futsal);
        return view('futsal.show', ["futsals" => $futsal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit($id_futsal)
    {
        $futsal = Futsal::find($id_futsal);
        return view('futsal.edit', ["futsals" => $futsal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_futsal)
    {
        $futsal = Futsal::find($id_futsal);
        $futsal->update($request->all());
        if ($request->hasFile('foto')) {
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('futsal', $filename, 'public');
            $futsal->update(['foto' => $filename]);
        }
        return redirect('/futsal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_futsal)
    {
        Futsal::destroy($id_futsal);
        return redirect('/futsal');
    }
}
