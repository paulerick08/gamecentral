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
                    <h4 class="mb-0 mt-1">Order Complete!</h4>
                </div>
            </div>
            <div class="mt-4 col-lg-7 col-md-10 col-12 px-0">
                <label>You've just converted</label><br>
                <h3 class="white-text mt-2 mb-3">
                    <b class="yellow-text">1312.437</b> <b>EOS</b> to <b class="yellow-text">5470.469</b> <b>GWX</b>
                </h3>
                <span>Rate: 1 EOS = 4.73 GWX</span>
                <div class="mt-4 col-12 px-0">
                    <button type="button" class="btn py-2 px-5" @click="goToMainPage">GO TO MAIN PAGE</button>
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
                    goToMainPage: function() {
                        window.location.href = '/home';
                    }
                }
            });
        </script>
    @endsection
@endsection
