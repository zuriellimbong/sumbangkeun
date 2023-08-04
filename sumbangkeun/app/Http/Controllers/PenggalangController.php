<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggalang;

class PenggalangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggalang = Penggalang::latest()->get();
        return view('penggalang.index', compact('penggalang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penggalang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'nama'=>'required',
            'status'=>'required',
            'kategori'=>'required',
            'biaya'=>'required',
            'url'=>'required',            
        ]);

        $penggalang = Penggalang::create([
            'judul' => $request->input('judul'),
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'kategori' => $request->input('kategori'),
            'biaya' => $request->input('biaya'),
            'url' => $request->input('url')            
        ]);

        return redirect('/penggalang')->with('success','Penggalang telah disimpan!');        
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
    public function edit(Penggalang $penggalang)
    {
        return view('penggalang.edit', compact('penggalang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penggalang $penggalang)
    {
        $request->validate([
            'judul'=>'required',
            'nama'=>'required',
            'status'=>'required',
            'kategori'=>'required',
            'biaya'=>'required',
            'url'=>'required',            
        ]);    
        
        $penggalang = Penggalang::whereId($penggalang->id)->update([
            'judul' => $request->input('judul'),
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'kategori' => $request->input('kategori'),
            'biaya' => $request->input('biaya'),
            'url' => $request->input('url')            
        ]);
        
        return redirect('/penggalang')->with('success','Penggalang telah diubah!');         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penggalang $penggalang)
    {
        $penggalang = Penggalang::find($penggalang->id);
        $penggalang->delete();

        return redirect('/penggalang')->with('success','Penggalang telah dihapus!');
    }
}
