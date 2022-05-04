@extends('partisi.mainlayout')

@section('judul','Edit Akun Siswa')
@section('utama')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Edit Basic Information</a></li>
                        <li><a href="#reviews"> Edit Acount Information</a></li>
                        <li><a href="#INFORMATION">Edit Social Information</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="#" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="number" type="text" class="form-control" placeholder="Fly Zend" value="Fly Zend">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="E104, catn-2, UK." value="E104, catn-2, UK.">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="smktelkom.sda@gmail.com" value="smktelkom.sda@gmail.com">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="01962067309" value="01962067309">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="00857465747" value="00857465747">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="646876" value="0086456">
                                                        </div>
                                                        <div class="form-group">Foto
                                                            <form action="proses.php" method="POST" enctype="multipart/form-data">
                                                                <table>
                                                                 
                                                                    <tr><td><input type="file" value="upload gambar"/></td></tr>
                                                                    </table>
                                                            </form>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Male</option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
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
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email" value="Admin@gmail.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Phone" value="01962067309">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password" value="#123#123">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Confirm Password" value="#123#123">
                                                    </div>
                                                    <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                </div>
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
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Facebook URL" value="http://www.facebook.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Twitter URL" value="http://www.twitter.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Google Plus" value="http://www.google-plus.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Linkedin URL" value="http://www.Linkedin.com">
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