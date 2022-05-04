@extends('partisi.mainlayout')

@section('judul','Tambah Akun Siswa')
@section('utama')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Basic Information</a></li>
                        <li><a href="#reviews"> Account Information</a></li>
                        <li><a href="#INFORMATION">Social Information</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div><br />
                                            @endif
                                            <form method="post" action="/store" id="dropzone1" enctype="multipart/form-data">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">Nama Lengkap
                                                            <input name="NamaLengkap" type="text" class="form-control" placeholder="Tulis nama lengkap">
                                                        </div>
                                                        <div class="form-group">Alamat
                                                            <input name="Alamat" type="text" class="form-control" placeholder="Tulis alamat">
                                                        </div>
                                                        <div class="form-group">Email
                                                            <input name="Email" type="text" class="form-control" placeholder="Tulis email">
                                                        </div>
                                                        <div class="form-group">Telephone
                                                            <input name="Telephone" type="number" class="form-control" placeholder="Tulis nomor telephone">
                                                        </div>
                                                        <div class="form-group">NISN
                                                            <input name="NISN" type="number" class="form-control" placeholder="Tulis NISN">
                                                        </div>
                                                        <div class="form-group">Password
                                                            <input name="Password" type="password" class="form-control" placeholder="Tulis password (angka)">
                                                        </div>
                                                        <div class="form-group">Foto
                                                        <form action="simpan-akunsiswa" method="POST" enctype="multipart/form-data">
                                                            <table>
                                                             
                                                                <tr><td><input name="foto" type="file" value="upload gambar"/></td></tr>
                                                                </table>
                                                        </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        
                                                        <div class="form-group">
                                                            <select name="gender" class="form-control">
                                                                <option value="none" selected="" disabled="">Pilih Gender</option>
                                                                <option value="0">Perempuan</option>
                                                                <option value="1">Laki-laki</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="kelas" class="form-control">
                                                                    <option value="none" selected="" disabled="">Pilih Kelas</option>
                                                                    <option value="0">X TJA 1</option>
                                                                    <option value="0">X TJA 2</option>
                                                                    <option value="0">X TJA 3</option>
                                                                    <option value="0">X TJA 4</option>
                                                                    <option value="0">X TJA 5</option>
                                                                    <option value="0">X TJA 6</option>
                                                                    <option value="0">X TJA 7</option>
                                                                    <option value="0">X TJA 8</option>
                                                                    <option value="0">XI TJA 1</option>
                                                                    <option value="0">XI TJA 2</option>
                                                                    <option value="0">XI TJA 3</option>
                                                                    <option value="0">XI TJA 4</option>
                                                                    <option value="0">XI TJA 5</option>
                                                                    <option value="0">XI TJA 6</option>
                                                                    <option value="0">XI TJA 7</option>
                                                                    <option value="0">XII TJA 1</option>
                                                                    <option value="0">XII TJA 2</option>
                                                                    <option value="0">XII TJA 3</option>
                                                                    <option value="0">XII TJA 4</option>
                                                            
                                                                </select>
                                                        </div>
                                                       
                                                       
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <form id="acount-infor" action="#" class="acount-infor">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">Email
                                                            <input type="email" class="form-control" name="email" placeholder="Tulis email">
                                                        </div>
                                                        <div class="form-group">Telephone
                                                            <input name="telephone" type="number" class="form-control" placeholder="Tulis nomor telephone">
                                                        </div>
                                                        <div class="form-group">Password
                                                            <input name="password" type="password" class="form-control" placeholder="Tulis password">
                                                        </div>
                                                        <div class="form-group">Konfirmasi Password
                                                            <input name="cpassword" type="password" class="form-control" placeholder="Konfirmasi Password">
                                                        </div>
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">Facebook URL
                                                        <input type="url1" class="form-control" placeholder="Tulis atau salin URL">
                                                    </div>
                                                    <div class="form-group">Twitter URL
                                                        <input type="url2" class="form-control" placeholder="Tulis atau salin URL">
                                                    </div>
                                                    <div class="form-group">Google Plus
                                                        <input type="url3" class="form-control" placeholder="Tulis atau salin URL">
                                                    </div>
                                                    <div class="form-group">Linkedin URL
                                                        <input type="url4" class="form-control" placeholder="Tulis atau salin URL">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 