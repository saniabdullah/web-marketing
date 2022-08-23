@extends('layouts.app')

@section('container')

{{-- Title Section --}}
<div class="row mx-0 mb-3">
   <h5 class="fw-bold">Report Sales CP0</h5>
</div>

<div class="row mx-0 mb-3">
   <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="/user-profile" method="POST" role="form text-left"> 
                <a href="{{ route('searchReport') }}">
                    <button type="button" class="btn btn-secondary mx-2">
                        Search
                    </button>
                </a>
                <a href="{{ route('report') }}">
                    <button type="button" class="btn btn-secondary mx-2">
                        Cancel
                    </button>
                </a>
                
                <hr>
                
                <div class="navbar rounded-pill">
                    <h6 class="mb-0">Selection Report</h6>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-form-label" for="flexRadioDefault1">
                            Monthy
                        </label>
                    </div>
                </div>
                <div class="row g-3 align-items-center px-3 pt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-form-label" for="flexRadioDefault1">
                            Yearly
                        </label>
                    </div>
                </div>

                <hr>

                <div class="navbar rounded-pill">
                        <h6 class="mb-0">Selection Criteria</h6>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="price" class="col-form-label">Plant</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="price" class="form-control">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="product" class="col-form-label">Product</label>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="product" class="col-form-label">Month</label>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="price" class="col-form-label">Year</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="price" class="form-control">
                        </div>
                    </div>

                    <hr>

                    <div class="navbar rounded-pill">
                        <h6 class="mb-0">Display</h6>
                    </div>
                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-form-label" for="flexRadioDefault1">
                                Show with grouped mounth
                            </label>
                            </div>
                    </div>
                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-form-label" for="flexRadioDefault1">
                                Show with ALV report
                            </label>
                        </div>
                    </div>
            </form>
        </div>
      </div>
    </div>
</div>

@endsection