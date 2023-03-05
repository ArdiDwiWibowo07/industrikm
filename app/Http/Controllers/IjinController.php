<?php

namespace App\Http\Controllers;

use App\Models\Ijins;
use Illuminate\Http\Request;

class IjinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ijins = Ijins::all();
        return view('ijins.index', compact('ijins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ijins.create');
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
            'ijinusaha'     => 'required|min:5',
        ]);



        //create post
        Ijins::create([
            'ijinusaha'     => $request->ijinusaha,
        ]);

        //redirect to index
        return redirect()->route('ijins.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(Ijins $ijin)
    {
        return view('ijins.edit', compact('ijin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ijins $ijin)
    {
        //validate form
        $this->validate($request, [
            'ijinusaha'     => 'required|min:5',
        ]);



        //create post
        $ijin->update([
            'ijinusaha'     => $request->ijinusaha,
        ]);

        //redirect to index
        return redirect()->route('ijins.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ijins $ijin)
    {
        $ijin->delete();
        return redirect()->route('ijins.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
