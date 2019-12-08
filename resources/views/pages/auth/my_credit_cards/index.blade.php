@extends('layouts.default')

@section('title', 'Add Credit Card')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/my_credit_cards.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent">
            <div class="col-12 px-0 title d-flex">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <h4 class="mb-0 mt-1">My Credit Cards</h4>
                </div>
            </div>
            <div class="mt-4 col-12 px-0">
                <div class="d-flex">
                    <div class="col-6 px-0 text-left">
                        <img src="{{ config('app.asset_url').'/images/auth/credit-cards/visa.png' }}" class="my-auto mx-1">
                        <span class="cardText">Card ending in 5708</span>
                    </div>
                    <div class="col-6 px-0 text-right">
                        <button type="button" class="yellowButton py-2" data-toggle="modal" data-target="#editModal">EDIT</button>
                        <button type="button" class="borderedButton">DELETE</button>
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <div class="col-6 px-0 text-left">
                        <img src="{{ config('app.asset_url').'/images/auth/credit-cards/mastercard.png' }}" class="my-auto mx-1">
                        <span class="cardText">Card ending in 1301</span>
                    </div>
                    <div class="col-6 px-0 text-right">
                        <button type="button" class="yellowButton py-2" data-toggle="modal" data-target="#editModal">EDIT</button>
                        <button type="button" class="borderedButton">DELETE</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content py-4 px-lg-5 px-md-5 px-4">
                        <div class="modal-header d-block text-center">
                            <div class="mt-2">
                                <p class="mb-0">EDIT CARD DETAILS</p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <small>Card Number</small><br>
                                <input type="number" class="cardNumber mt-2" autofocus>
                            </div>
                            <div class="mt-3 d-flex">
                                <div class="col-8 px-0">
                                    <small>Expiry Date</small><br>
                                    <div class="d-flex mt-2">
                                        <select>
                                            <option value="" selected disabled>Month</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                        <select class="mx-2">
                                            <option value="" selected disabled>YYYY</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 px-0">
                                    <small>(CVV/CVC)</small><br>
                                    <div class="d-flex mt-2">
                                        <input type="number" class="cvc">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-5 px-0">
                                <small>Zip / Postal Code</small><br>
                                <input type="number" class="mt-2">
                            </div>
                        </div>
                        <div class="modal-footer text-center d-block">
                            <div class="col-12 px-0">
                                <button type="button" class="btn p-3">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('extra_scripts')
        <script>
            new Vue({
                el: '#rightContent',
                data: function() {
                    return {
                        //
                    };
                },
                methods: {
                    //
                }
            });
        </script>
    @endsection
@endsection
