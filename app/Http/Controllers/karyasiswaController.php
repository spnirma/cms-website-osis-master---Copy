<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyasiswa;

class karyasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = karyasiswa::all();
        return view('karyasiswa', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model=new karyasiswa;
        return view('tambahkarya', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new karyasiswa;
        $model->foto = $request->foto;
        $model->JudulKarya = $request->JudulKarya;
        $model->Status = $request->Status;
        $model->Deskripsi = $request->Deskripsi;
        $model->NamaPengirim = $request->NamaPengirim;
        $model->TanggalMulai = $request->TanggalMulai;
        $model->TanggalAkir = $request->TanggalAkir;
        $model->save();

        return redirect('karyasiswa');
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
