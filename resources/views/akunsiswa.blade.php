@extends('partisi.mainlayout')

@section('judul','Akun Siswa')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Akun Siswa</h4>
                    <div class="add-product">
                        <a href="tambahakun">+ Akun siswa</a>
                    </div>
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Setting</th>
                                <th>Nama Siswa</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>NISN</th>
                                <th>Password</th>
                                <th>Photo</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($datas as $key)
                                <tr>
                                    <td></td>
                                    <td>
                              
                                    </td>
                                    <td>{{ $key->NamaLengkap }}</td>
                                    <td>{{ $key->Alamat }}</td>
                                    <td>{{ $key->Email }}</td>
                                    <td>{{ $key->Telephone }}</td>
                                    <td>{{ $key->NISN }}</td>
                                    <td>{{ $key->Password }}</td>
                                    <td>{{ $key->foto }}</td>
                                    <td>{{ $key->gender }}</td>
                                    <td>{{ $key->kelas }}</td>
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