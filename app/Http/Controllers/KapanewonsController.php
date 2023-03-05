<?php

namespace App\Http\Controllers;

use App\Models\Kapanewons;
use Illuminate\Http\Request;

class KapanewonsController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kapanewons = Kapanewons::all();
        return view('kapanewons.index', compact('kapanewons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kapanewons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kapanewon'     => 'required|min:5',
        ]);



        //create post
        Kapanewons::create([
            'kapanewon'     => $request->kapanewon,
        ]);

        //redirect to index
        return redirect()->route('kapanewons.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kapanewons $kapanewon)
    {
        return view('kapanewons.edit', compact('kapanewon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kapanewons $kapanewon)
    {
        //validate form
        $this->validate($request, [
            'kapanewon'     => 'required|min:5',
        ]);



        //create post
        $kapanewon->update([
            'kapanewon'     => $request->kapanewon,
        ]);

        //redirect to index
        return redirect()->route('kapanewons.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kapanewons $kapanewon)
    {
        $kapanewon->delete();
        return redirect()->route('kapanewons.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
