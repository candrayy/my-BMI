<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\Makanan;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = Makanan::paginate(5);
        return view('admin.makanan.makanan', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.makanan.tambah-makanan', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makanan = new Makanan;
        $makanan->kategori_id = $request->kategori_id;
        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/makanan/', $filename);
            $makanan->gambar = $filename;
        }
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->kand_kalori = $request->kand_kalori;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->save();
        return redirect('makanan');
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
    public function edit($id)
    {
        $makanan = Makanan::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.makanan.edit-makanan', compact('makanan', 'kategori'));
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
        $makanan = Makanan::findOrFail($id);
        $makanan->kategori_id = $request->kategori_id;
        if($request->hasfile('gambar'))
        {
            $destination = 'images/makanan/'.$makanan->gambar;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/makanan/', $filename);
            $makanan->gambar = $filename;
        }
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->kand_kalori = $request->kand_kalori;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->save();
        return redirect('makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = Makanan::findOrFail($id);
        $makanan->delete();
        return redirect('makanan');
    }
}
