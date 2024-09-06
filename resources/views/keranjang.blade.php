@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="container mb-5 mt-3">

            <div class="container-fluid">
                <div class="row my-2 mx-1 justify-content-center">
                    <table class="table table-striped table-borderless">
                        <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Description</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Pro Package</td>
                                <td>4</td>
                                <td>$200</td>
                                <td>$800</td>
                                <td><button class="btn btn-danger">Batalkan</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Web hosting</td>
                                <td>1</td>
                                <td>$10</td>
                                <td>$10</td>
                                <td><button class="btn btn-danger">Batalkan</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Consulting</td>
                                <td>1 year</td>
                                <td>$300</td>
                                <td>$300</td>
                                <td><button class="btn btn-danger">Batalkan</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <ul class="list-unstyled">
                            <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>$1110</li>
                            <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>$111</li>
                        </ul>
                        <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                                style="font-size: 25px;">$1221</span></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-10">
                        <p>Thank you for your purchase</p>
                    </div>
                    <div class="col-xl-2">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary text-capitalize">Pay Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection