@extends('partisi.mainlayout')

@section('judul','Karya Siswa')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Karya Siswa</h4>
                    <div class="add-product">
                        <a href="tambahkarya">+ Karya</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Karya</th>
                                <th>Judul Karya</th>
                                <th>Status</th>
                                <th>Deskripsi</th>
                                <th>Nama Pengirim</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($datas as $key)
                            <tr>
                                <td></td>
                                <td>{{ $key->foto }}</td>
                                <td>{{ $key->JudulKarya }}</td>
                                <td>{{ $key->Status }}</td>
                                <td>{{ $key->Deskripsi}}</td>
                                <td>{{ $key->NamaPengirim }}</td>
                                <td>{{ $key->TanggalMulai }}</td>
                                <td>{{ $key->TanggalAkir }}</td>
                                <td><input class="btn btn-primary" type="button" value="Edit">
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
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