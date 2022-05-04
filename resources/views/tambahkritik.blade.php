@extends('partisi.mainlayout')

@section('judul','Tambah Kritik')
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
                                                        <div class="form-group">Kritik dan Saran
                                                            <input name="Isi" type="text" class="form-control" placeholder="Tulis kritik & saran">
                                                        </div>
                                                        <div class="form-group">Nama Pengirim
                                                            <input name="pengirim" type="text" class="form-control" placeholder="Tulis nama pengirim">
                                                        </div>
                                                        <div class="form-group">Email
                                                            <input name="email" type="text" class="form-control" placeholder="Tulis email">
                                                        </div>
                                                        <div class="form-group">Asal Sekolah
                                                            <input name="AsalSekolah" type="text" class="form-control" placeholder="Tulis asal sekolah">
                                                        </div>
                                                        <div class="form-group">Tanggal
                                                            <input name="Tanggal" type="date" class="form-control" placeholder="Tulis tanggal">
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