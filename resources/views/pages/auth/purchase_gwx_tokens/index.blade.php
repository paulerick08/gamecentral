@extends('layouts.default')

@section('title', 'Purchase GWX Tokens')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/purchase.css' }}" rel="stylesheet" type="text/css">
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
                    <h4 class="mb-0 mt-1">Purchase GWX Tokens</h4>
                </div>
            </div>
            <div class="mt-4">
                <span class="bold-text">Select Purchase Method</span><br>
                <div class="mt-3 methods">
                    <div class="mr-5">
                        <input type="radio" name="token" class="mr-2" v-model="purchaseMethod" value="Credit Card" checked>
                        <span>Using Credit Card</span>
                    </div>
                    <div class="mr-5">
                        <input type="radio" name="token" class="mr-2" v-model="purchaseMethod" value="Crypto">
                        <span>Using Crypto (BTC, ETH and EOS supported)</span>
                    </div>
                </div>
            </div>
            <div v-if="purchaseMethod == 'Crypto'" class="mt-4">
                <span class="bold-text">Purchase with Crypto</span><br>
                <span class="instruction">Select the token you would like to purchase</span>
            </div>
            @include('pages.auth.purchase_gwx_tokens.crypto')
            @include('pages.auth.purchase_gwx_tokens.credit_card')
        </div>
    </div>
    @section('extra_scripts')
        <script>
            new Vue({
                el: '#rightContent',
                data: function() {
                    return {
                        purchaseMethod: 'Credit Card',
                        visaAmount: 0,
                        visaOtherAmount: 0,
                        netellerAmount: 0,
                        netellerOtherAmount: 0,
                        skrillAmount: 0,
                        skrillOtherAmount: 0,
                    };
                },
                methods: {
                    copyAddress: function(id) {
                        var copyText = $('#' + id);
                        copyText.select();
                        document.execCommand("copy");
                    }
                }
            });
        </script>
    @endsection
@endsection
