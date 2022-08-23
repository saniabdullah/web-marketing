@extends('layouts.app')

@section('container')

{{-- Title Section --}}
<div class="row mx-0 mb-3">
   <h5 class="fw-bold">Sales and Contract Master</h5>
</div>

<div class="row mx-0 mb-3">
   <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <a href="{{ route('order') }}">
                <button type="button" class="btn btn-secondary mx-2">
                    Print
                </button>
            </a>

            <hr>
            
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center table-bordered">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Contract No.</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Customer Code</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Type</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Product</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Tax Type</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Quantity</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Price</th>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                    </div>
                                </td>
                            
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <a href="{{ route('order') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            Cancel
                        </button>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection
