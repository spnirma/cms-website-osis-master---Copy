@extends('partisi.mainlayout')

@section('judul','Info Lomba & Event')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Kegiatan</h4>
                    <div class="add-product">
                        <a href="tambahevent">+ Kegiatan</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Pamflet</th>
                                <th>Judul Kegiatan</th>
                                <th>Status</th>
                                <th>Deskripsi</th>
                                <th>Ketua Pelaksana</th>
                                <th>Waktu Kegiatan</th>
                                <th>Sasaran</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $value)
                                <tr>
                                    <td></td>
                                    <td>{{ $value->Pamflet }}</td>
                                    <td>{{ $value->JudulKegiatan }}</td>
                                    <td>{{ $value->Status }}</td>
                                    <td>{{ $value->Deskripsi }}</td>
                                    <td>{{ $value->KetuaPelaksana }}</td>
                                    <td>{{ $value->WaktuKegiatan}}</td>
                                    <td>{{ $value->Sasaran }}</td>
                                    <td><input class="btn btn-primary" type="button" value="Edit">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            </tbody>    
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 