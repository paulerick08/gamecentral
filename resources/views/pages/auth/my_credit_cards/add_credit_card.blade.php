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
                    <h4 class="mb-0 mt-1">Add Credit Card</h4>
                </div>
            </div>
            <div class="mt-4 col-lg-4 col-md-12 col-12 px-0">
                <div>
                    <small>Card Number</small><br>
                    <input type="number" class="cardNumber">
                    <i class="far fa-credit-card"></i>
                </div>
                <div class="d-flex mt-3">
                    <div class="col-8 pl-0">
                        <small>Expiry Date</small><br>
                        <div class="d-flex">
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
                        <div class="d-flex">
                            <input type="number" class="cvc mr-1">
                            <img src="{{ config('app.asset_url').'/images/auth/purchase/card-back.png' }}" class="my-auto">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <small>Zip / Postal Code</small>
                    <div >
                        <input class="postalCode" type="number">
                    </div>
                </div>
            </div>
            <div class="col-12 px-0">
                <button type="button" class="submitButton py-2 mt-4 px-5">SUBMIT</button>
            </div>
        </div>
    </div>
@endsection
