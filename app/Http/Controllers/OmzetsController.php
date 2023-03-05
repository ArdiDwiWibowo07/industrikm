<?php

namespace App\Http\Controllers;

use App\Models\Omzets;
use Illuminate\Http\Request;

class OmzetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omzets = Omzets::all();
        return view('omzets.index', compact('omzets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('omzets.create');
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
            'jenis'     => 'required|min:5',
        ]);



        //create post
        Omzets::create([
            'jenis'     => $request->jenis,
        ]);

        //redirect to index
        return redirect()->route('omzets.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(Omzets $omzet)
    {
        return view('omzets.edit', compact('omzet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Omzets $omzet)
    {
        //validate form
        $this->validate($request, [
            'jenis'     => 'required|min:5',
        ]);



        //create post
        $omzet->update([
            'jenis'     => $request->jenis,
        ]);

        //redirect to index
        return redirect()->route('omzets.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Omzets $omzet)
    {
        $omzet->delete();
        return redirect()->route('omzets.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
