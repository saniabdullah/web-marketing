@extends('layouts.app')

@section('container')

{{-- Title Section --}}
<div class="row mx-0 mb-3">
   <h5 class="fw-bold">Delivery Order</h5>
</div>

<div class="row mx-0 mb-3">
   <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="/user-profile" method="POST" role="form text-left"> 
                <a href="{{ route('searchOrder') }}">
                    <button type="button" class="btn btn-secondary mx-2">
                        Search
                    </button>
                </a>
                <a href="{{ route('order') }}">
                    <button type="button" class="btn btn-secondary mx-2">
                        Cancel
                    </button>
                </a>
                
                <hr>

                <div class="navbar rounded-pill">
                    <h6 class="mb-0">Selection Criteria</h6>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="price" class="col-form-label">No. Kontrak</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="product" class="col-form-label">Customer</label>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="product" class="col-form-label">Nama Sopir</label>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="price" class="col-form-label">No. Polisi</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="price" class="col-form-label">No. Sim</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>

                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="price" class="col-form-label">Tempat Muat</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="product" class="col-form-label">Tujuan Berangkat</label>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="col-sm-2">
                        <label for="price" class="col-form-label">Tanggal</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>

                <hr>

                <a href="{{ url('order') }}">
                    <button type="button" class="btn btn-secondary mx-2">
                        simpan
                    </button>
                </a>
            </form>
        </div>
      </div>
    </div>
</div>

@endsection