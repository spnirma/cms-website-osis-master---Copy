@extends('partisi.mainlayout')

@section('judul','Login')
@section('utama')
   
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>LOGIN USER</h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm">
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="Ketikkan Username anda" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="Ketikkan Password anda" required="" value="" name="password" id="password" class="form-control">
                        </div>
                        <div class="checkbox login-checkbox">
                            <label>
                                    <input type="checkbox" class="i-checks"> Remember me </label>
                        </div>
                        <button class="btn btn-success btn-block loginbtn">Login</button>
                        <a class="btn btn-default btn-block" href="register">Register</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <p> © 2021-2022</a></p>
        </div>
    </div>   
</div>

@endsection 