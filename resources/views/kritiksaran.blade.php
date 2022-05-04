@extends('partisi.mainlayout')

@section('judul','Kritik dan Saran')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Kritik dan Saran</h4>
                    <div class="add-product">
                        <a href="tambahkritik">+ Kritik dan Saran</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Isi Kritik & Saran</th>
                                <th>Nama Pengirim</th>
                                <th>Email</th>
                                <th>Asal Sekolah </th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                                
                            </tr>
                            @foreach ($datas as $key)
                            <tr>
                                <td></td>
                                <td>{{ $key->Isi}}</td>
                                <td>{{ $key->pengirim }}</td>
                                <td>{{ $key->email }}</td>
                                <td>{{ $key->AsalSekolah}}</td>
                                <td>{{ $key->Tanggal }}</td>
                                <td><input class="btn btn-primary" type="button" value="Edit">
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 