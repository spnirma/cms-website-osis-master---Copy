@extends('partisi.mainlayout')

@section('judul','Tambah Karya Siswa')
@section('utama')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Masukan Informasi</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-group alert-up-pd">
                                                                <div class="form-group">Foto
                                                                    <form action="simpan-akunsiswa" method="POST" enctype="multipart/form-data">
                                                                        <table>
                                                                         
                                                                            <tr><td><input name="foto" type="file" value="upload gambar"/></td></tr>
                                                                            </table>
                                                                    </form>
                                                                    </div>
                                                            </div>Judul Karya
                                                            <input name="JudulKarya" type="text" class="form-control" placeholder="Tulis judul karya">
                                                        </div>
                                                        <div class="form-group">Status
                                                            <select name="Status" class="form-control">
                                                                <option value="none" selected="" disabled="">Pilih status</option>
                                                                <option value="0">Aktif</option>
                                                                <option value="1">Jeda</option>
                                                                <option value="2">Tidak aktif</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">Deskripsi
                                                            <input name="Deskripsi" type="text" class="form-control" placeholder="Tulis deskripsi">
                                                        </div>
                                                        <div class="form-group">Nama Pengirim
                                                            <input name="NamaPengirim" type="text" class="form-control" placeholder="Tulis nama pengirim">
                                                        </div>
                                                        <div class="form-group">Tanggal Mulai
                                                            <input name="TanggalMulai" type="date" class="form-control" placeholder="Tanggal Mulai">
                                                        </div>
                                                        <div class="form-group">Tanggal Akhir
                                                            <input name="TanggalAkir" type="date" class="form-control" placeholder="Tanggal Akir">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 