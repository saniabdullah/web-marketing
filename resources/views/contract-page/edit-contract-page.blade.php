@extends('layouts.app')

@section('container')

{{-- Title Section --}}
<div class="row mx-0 mb-3">
   <h5 class="fw-bold">Master Contract</h5>
</div>

<div class="row mx-0 mb-3">
   <div class="col-md-12">
      <div class="card">
        <div class="card-body">
        <a href="{{ route('contract') }}">
            <button type="button" class="btn btn-secondary mx-2">
                Save
            </button>
        </a>
        <a href="{{ route('contract') }}">
            <button type="button" class="btn btn-secondary mx-2">
                Cancel
            </button>
        </a>
        <a href="{{ route('dashboard') }}">
            <button type="button" class="btn btn-secondary mx-2">
                Print
            </button>
        </a>

        <hr>
        
        <form action="/user-profile" method="POST" role="form text-left"> 
            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="contractNo" class="col-form-label">Contract No. :</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" id="contractNo" class="form-control" value="">
                </div>
        
                <div class="col-sm-2">
                    <label for="type" class="col-form-label">Type :</label>
                </div>
                <div class="col-md-2 pe-0">
                    <select class="form-select" name="type" id="type">
                        <option value="ALL">ALL</option>
                        <option value="2F">2F</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="customer" class="col-form-label">Customer :</label>
                </div>
                <div class="col-md-3 pe-0">
                    <select class="form-select" name="customers" id="customers">
                        <option value="All">ALL</option>
                        <option value="Bayu">Bayu</option>
                        <option value="Bagas">Bagas</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="customer" class="form-control" value="">
                </div>
            </div>

            <hr>

            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="price" class="col-form-label">Price (Rp/Kg)</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" id="price" class="form-control" value="">
                </div>
        
                <div class="col-sm-2">
                    <label for="quantity" class="col-form-label">Quantity</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="quantity" class="form-control" value="">
                </div>
                <p class="col-sm-1 pt-4 px-0">Kg</p>
            </div>
            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="bursaMalay" class="col-form-label">Price Bursa Index Malaysia</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" id="bursaMalay" class="form-control" value="">
                </div>
        
                <div class="col-sm-2">
                    <label for="product" class="col-form-label">Product</label>
                </div>
                <div class="col-md-2 pe-0">
                    <select class="form-select" name="product" id="product">
                        <option value="ALL">ALL</option>
                        <option value="Minyak">Minyak</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="bursaIndo" class="col-form-label">Price Bursa Index Indonesia</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" id="bursaIndo" class="form-control" value="">
                </div>
                <div class="col-sm-2">
                    <label for="taxType" class="col-form-label">Tax Type</label>
                </div>
                <div class="col-md-2 pe-0">
                    <select class="form-select" name="taxType" id="taxType">
                        <option value="ALL">ALL</option>
                        <option value="Permanen">Permanen</option>
                    </select>
                </div>
            </div>

            <hr>

            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="contactDate" class="col-form-label">Contract Date</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" id="contactDate" class="form-control" value="">
                </div>
                <div class="col-sm-2">
                    <label for="status" class="col-form-label">Status</label>
                </div>
                <div class="col-md-2 pe-0">
                    <select class="form-select" name="status" id="status">
                        <option value="ALL">ALL</option>
                        <option value="Aktif">Aktif</option>
                    </select>
                </div>
            </div>

            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="delivery" class="col-form-label">Delivery End Date</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" id="delivery" class="form-control" value="">
                </div>
            </div>

            <hr>

            <div class="row g-3 align-items-center px-3 pt-3">
                <div class="col-sm-2">
                    <label for="totalDespatch" class="col-form-label">Total Despatch</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="totalDespatch" class="form-control" value="">
                </div>
                <p class="col-sm-1 px-0">MT</p>
        
                <div class="col-sm-2">
                    <label for="totalDelivery" class="col-form-label">Total Delivery</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="totalDelivery" class="form-control" value="">
                </div>
                <p class="col-sm-1 px-0">MT</p>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>

@endsection