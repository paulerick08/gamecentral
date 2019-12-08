@extends('layouts.default')

@section('title', 'Currency Exchange')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/conversion.css' }}" rel="stylesheet" type="text/css">
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
                    <h4 class="mb-0 mt-1">Currency Exchange</h4>
                </div>
            </div>
            <div class="mt-4">
                <span class="instruction">Select from the dropdowns below and perform a currency exchange</span>
            </div>
            <div class="mt-4 col-lg-7 col-md-10 col-12 px-0">
                <label>You are converting from:</label><br>
                <div class="d-flex">
                    <div class="col-3 pl-0">
                        <select v-model="token" :class="{'noLogo': token == ''}">
                            <option value="" selected disabled>Select</option>
                            <option value="EOS">EOS</option>
                            <option value="GWX">GWX</option>
                        </select>
                        <img v-if="token == 'EOS'" src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}" class="eosLogo">
                        <img v-if="token == 'GWX'" src="{{ config('app.asset_url').'/images/logo-only.png' }}" class="gwxLogo">
                    </div>
                    <div class="col-6 pl-0">
                        <input type="number">
                        <small class="gray-text pl-1">Current Balance: 1234.5670 EOS</small>
                    </div>
                    <a href="#" class="yellow-text">Convert All</a>
                </div>
                <div class="separator mt-3 pl-0">
                    <img src="{{ config('app.asset_url').'/images/auth/sep-arrow.png' }}" class="transferLogo">
                </div>
                <label class="mt-3">To:</label><br>
                <div class="d-flex mt-1">
                    <div class="col-3 pl-0">
                        <select v-model="tokenTo" :class="{'noLogo': tokenTo == ''}">
                            <option value="" selected disabled>Select</option>
                            <option value="EOS">EOS</option>
                            <option value="GWX">GWX</option>
                        </select>
                        <img v-if="tokenTo == 'EOS'" src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}" class="eosLogo">
                        <img v-if="tokenTo == 'GWX'" src="{{ config('app.asset_url').'/images/logo-only.png' }}" class="gwxLogo">
                    </div>
                    <div class="col-6 pl-0">
                        <input type="number">
                    </div>
                </div>
                <label class="mt-5">Current Rate:</label><br>
                <span>1 EOS = 4.73 GWX</span>
                <div class="mt-2 time">
                    <img src="{{ config('app.asset_url').'/images/auth/time.png' }}" class="timeLogo mr-1">
                    <span class="gray-text">This rate is valid for</span> <i>28 seconds</i><span class="gray-text"> more..</span>
                </div>
                <div class="mt-4 col-12 px-0">
                    <button type="button" class="btn py-2 px-5">CONVERT NOW</button>
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
                        token: "",
                        tokenTo: "",
                    };
                },
                methods: {
                    //
                }
            });
        </script>
    @endsection
@endsection
