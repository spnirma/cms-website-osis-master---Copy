<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akunsiswa;
class akunsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = akunsiswa::all();
        return view('akunsiswa', compact(
            'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model=new akunsiswa;
        return view('tambahakun', compact(
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
        dd($request->all());
        akunsiswa::create($request->all());
        $model = new akunsiswa;
        $model->NamaLengkap = $request->NamaLengkap;
        $model->Alamat = $request->Alamat;
        $model->Email = $request->Email;
        $model->Telephone = $request->Telephone;
        $model->NISN = $request->NISN;
        $model->Password = $request->Password;
        $model->foto = $request->foto;
        $model->gender = $request->gender;
        $model->kelas = $request->kelas;
        $model->save();

        return redirect('akunsiswa');
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
        $model= akunsiswa::find($id);
        return view('editakun', compact(
            'model'
        )); 
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
