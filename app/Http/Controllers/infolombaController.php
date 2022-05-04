<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infolomba;
class infolombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = infolomba::all();
        return view('infolomba', compact(
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
        $model=new infolomba;
        return view('tambahevent', compact(
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
        $model = new infolomba;
        $model->Pamflet = $request->Pamflet;
        $model->JudulKegiatan = $request->JudulKegiatan;
        $model->Status = $request->Status;
        $model->Deskripsi = $request->Deskripsi;
        $model->KetuaPelaksana = $request->KetuaPelaksana;
        $model->WaktuKegiatan = $request->WaktuKegiatan;
        $model->Sasaran = $request->Sasaran;
        $model->save();

        return redirect('infolomba');
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
