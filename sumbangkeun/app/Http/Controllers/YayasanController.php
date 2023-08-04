<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yayasan;
use App\Models\Alamat;

class YayasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yayasan = Yayasan::latest()->get();
        return view('yayasan.index', compact('yayasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alamats = Alamat::get();
        
        return view('yayasan.create', compact('alamats'));
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
            'nama'=>'required',
            'status'=>'required',
            'alamat_id'=>'required',
            'deskripsi'=>'required',
            'url'=>'required',            
        ]);

        $yayasan = Yayasan::create([
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'alamat_id' => $request->input('alamat_id'),
            'deskripsi' => $request->input('deskripsi'),
            'url' => $request->input('url')            
        ]);

        return redirect('/yayasan')->with('success','Yayasan telah disimpan!');        
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
    public function edit(Yayasan $yayasan)
    {
        $alamats = Alamat::get();

        return view('yayasan.edit', compact('yayasan', 'alamats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yayasan $yayasan)
    {
        $request->validate([
            'nama'=>'required',
            'status'=>'required',
            'alamat_id'=>'required',
            'deskripsi'=>'required',
            'url'=>'required',            
        ]);    
        
        $yayasan = Yayasan::whereId($yayasan->id)->update([
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'alamat_id' => $request->input('alamat_id'),
            'deskripsi' => $request->input('deskripsi'),
            'url' => $request->input('url')            
        ]);
        
        return redirect('/yayasan')->with('success','Yayasan telah diubah!');         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yayasan $yayasan)
    {
        $yayasan = Yayasan::find($yayasan->id);
        $yayasan->delete();

        return redirect('/yayasan')->with('success','Yayasan telah dihapus!');
    }
}
