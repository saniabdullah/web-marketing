@extends('layouts.signin')

@section('container')

<div class="login-screen">


    <div class="row mx-0" style="padding: 20px;">
        <img class="login-image mx-auto" src="{{ asset('images/logo-hasnur.png') }}">
    </div>
    <div class="row" style="padding: 20px;">
        <div class="col-md-12">
            <h4 class="text-center"><strong>Hello! Welcome back.</strong></h4>
            <p class="text-center" style="color: #AAA; font-size:14px;">Just for administration purpose</p>

            <form class="mt-5" action="{{ route('signin.process') }}" method="post">
                @csrf
                <input type="text" class="form-control mb-2 form-login" name="adminusername" value="{{ old('adminusername') }}" placeholder="Username" required> 
                <input type="password" class="form-control mb-2 form-login" name="adminpass" placeholder="Password" required>

                <button type="submit" class="btn btn-main btn-sm btn-login mt-3" name="btnSignIn">SIGN IN</button>
            </form>
        </div>
    </div>
   <div class="row mt-5">
      <p class="text-center copy-font">&copy;2022 PT Hasnur Informasi Teknologi (Hasnur Group)</p>
   </div>
</div>