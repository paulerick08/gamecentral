@extends('layouts.default')

@section('title', 'My Wallet')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/wallet.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent">
            <div class="d-lg-flex d-md-block d-block">
                <div class="col-lg-6 col-md-12 col-12 pl-lg-0">
                    <div class="title d-flex">
                        <div class="leftBorder"></div>
                        <div class="d-flex align-items-center p-2">
                            <h4 class="mb-0 mt-1">Deposit Instructions</h4>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="instruction">To deposit EOS or GWX to your wallet, send them to the following address:</span>
                    </div>
                    <div class="mt-4">
                        <div class="mt-2">
                            <input type="text" id="address" value="QWERTYUIOPDTFGYHUJIKLSEDRFTGYHUJ" readonly>
                            <button type="button" class="btn ml-2" @click="copyAddress">
                                <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                            </button>
                        </div>
                        <div class="mt-4">
                            <span class="instruction">If you're sending from a mobile device, scan the following QR code, which is the same as the address above</span>
                        </div>
                        <img src="{{ config('app.asset_url').'/images/qr-code.jpg' }}" class="mt-5">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 px-lg-0 mt-lg-0 mt-md-4 mt-4">
                    <div class="title d-flex">
                        <div class="leftBorder"></div>
                        <div class="d-flex align-items-center p-2">
                            <h4 class="mb-0 mt-1">Withdrawal Instructions</h4>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="instruction">To withdraw your tokens to another EOS wallet, select the token below and enter a memo if it is required by the receiving wallet</span>
                    </div>
                    <div class="whiteText mt-3">
                        <span>Select token to withdraw</span>
                    </div>
                    <div class="mt-3">
                        <select>
                            <option value="EOS" selected>EOS</option>
                            <option value="GWX">GWX</option>
                        </select>
                    </div>
                    <div class="whiteText mt-3">
                        <span>Select amount</span>
                    </div>
                    <div class="mt-3">
                        <input type="number" class="amount"><a href="#" class="yellow-text ml-2">Withdraw all</a><br>
                        <span class="gray-text">You may withdraw up to 1101.2379 EOS</span>
                    </div>
                    <div class="mt-3">
                        <span class="whiteText">Input memo</span><span class="gray-text">(Optional. Required by some exchanges)</span>
                        <input type="text" class="amount"><br>
                        <span class="gray-text">Max 50 characters</span>
                    </div>
                    <div class="popup d-none p-2 mt-2">
                        <span class="white-text">You have 2FA enabled. Please check your Google Authenticator device. If you have lost your phone, contact us at </span><span class="yellow-text">support@gameworks.io</span>
                    </div>
                    <div class="mt-3">
                        <span class="whiteText">Input the number from</span><img src="{{ config('app.asset_url').'/images/auth/g-authenticator.png' }}" class="ml-2"><span class="whiteText"> Aunthenticator</span>
                        <span class="fa-stack mt-1" @click="openPopup" @mouseleave="closePopup">
                            <i class="fa fa-circle"></i>
                            <span class="question"> ? </span>
                        </span>
                    </div>
                    <div class="mt-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator">
                    </div>
                    <div class="col-12 px-0">
                        <button type="button" class="py-2 px-4 mt-4">WITHDRAW</button>
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
                    copyAddress: function() {
                        var copyText = $('#address');
                        copyText.select();
                        document.execCommand("copy");
                    },
                    openPopup: function() {
                        $('.popup').addClass('d-block');
                        $('.popup').removeClass('d-none');
                    },
                    closePopup: function() {
                        setTimeout(function() {
                            $('.popup').removeClass('d-block');
                            $('.popup').addClass('d-none');
                        }, 5000);
                    },
                }
            });
        </script>
    @endsection
@endsection
