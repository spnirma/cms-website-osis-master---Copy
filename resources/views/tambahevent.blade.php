@extends('partisi.mainlayout')

@section('judul','Tambah Kegiatan')
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
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">Pamflet
                                                            
                                                                <form action="proses.php" method="POST" enctype="multipart/form-data">
                                                                    <table>
                                                                     
                                                                        <tr><td><input name="Pamflet" type="file" value="upload gambar"/></td></tr>
                                                                        </table>
                                                                </form>
                                                               
                                                        </div>
                                                        <div class="form-group">Judul Kegiatan
                                                            <input name="JudulKegiatan" type="text" class="form-control" placeholder="Tulis judul kegiatan">
                                                        </div>
                                                        <div class="form-group">Status
                                                            <select name="Status" class="form-control">
                                                                <option value="none" selected="" disabled="">Pilih status</option>
                                                                <option value="0">Sedang berlangsung</option>
                                                                <option value="1">Akan berlangsung</option>
                                                                <option value="2">Sudah berlangsung</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">Deskripsi
                                                            <input name="Deskripsi" type="text" class="form-control" placeholder="Tulis deskripsi">
                                                        </div>
                                                        <div class="form-group">Ketua Pelaksana
                                                            <input name="KetuaPelaksana" type="text" class="form-control" placeholder="Tulis ketua pelaksana">
                                                        </div>
                                                        <div class="form-group">Waktu Kegiatan
                                                            <input name="WaktuKegiatan" type="date" class="form-control" placeholder="T#">
                                                        </div>
                                                        <div class="form-group">Sasaran
                                                            <input name="Sasaran" type="text" class="form-control" placeholder="Tulis sasaran">
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
@endsection 