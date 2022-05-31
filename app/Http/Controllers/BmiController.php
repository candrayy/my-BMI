<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use App\Models\Makanan;

class BmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('my-bmi');
    }

    public function result (Request $request)
    {
        
        $hitung = ($request->filled('tinggi') && $request->filled('berat')) 
        ? $request->berat / ((($request->tinggi) * ($request->tinggi)) / 10000) : 0;

        $hasil = round($hitung, 1);
        
        if($hasil < 18.5)
        {
            $kategori = 'Kurus';
        }
        elseif($hasil >= 18.5 && $hasil <= 29.9)
        {
            $kategori = 'ideal';
        }
        elseif($hasil > 29.9)
        {
            $kategori = 'Obesitas';
        }
        $bmi = DB::table('makanans')->join('kategoris', 'makanans.kategori_id', '=', 'kategoris.id')
                ->where('kategoris.nama_kategori', $kategori)->get();
        // dd($bmi);
        return view('result-bmi', compact('bmi', 'kategori', 'hasil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
