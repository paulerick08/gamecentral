@extends('layouts.default')

@section('title', 'Gameworks Central')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/game_page.css' }}" rel="stylesheet" type="text/css">
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
                    <h4 class="mb-0 mt-1">Five Play Joker Poker</h4>
                </div>
            </div>

            <div class="col-12 px-0 mt-3 screen">
                <img src="{{ config('app.asset_url').'/images/screen-play.jpg' }}">
            </div>

            <div class="col-12 px-0 mt-3 d-lg-flex d-md-block d-block description">
                <div class="col-lg-9 col-md-12 col-12 px-0">
                    <h4>Select the token to play with</h4>
                    <div class="mt-3 token d-flex">
                        <div class="mr-5">
                            <input type="radio" name="token" class="mr-2" checked>
                            <span>GWX</span>
                        </div>
                        <div class="mr-5">
                            <input type="radio" name="token" class="mr-2">
                            <span>EOS</span>
                        </div>
                        <div class="mr-5">
                            <input type="radio" name="token" class="mr-2">
                            <span>USD</span>
                        </div>
                        <div class="mr-5">
                            <input type="radio" name="token" class="mr-2">
                            <span>CNY</span>
                        </div>
                    </div>

                    <h4 class="mt-4">Play Joker Poker</h4>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>

                    <h4 class="mt-3">How to Play</h4>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small><br>
                    <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
                </div>

                <div class="mt-3 col-lg-3 col-md-12 col-12 pl-lg-2 pr-lg-0 px-md-0 px-0">
                    <h6>GAME TRACKER</h6>

                    <div class="tracker mt-2 p-2 white-text" v-for="index in 4">
                        <p class="mb-0">TX ID: <span>A667788255661YYHG66778000</span></p>
                        <p class="mb-0">RESULT: <span>+3.0544 GWX</span></p>
                        <p class="mb-0">NEW BALANCE: <span>+1245.5528 GWX</span></p>
                        <p class="mb-1">STATUS: <span>BEING MINED</span></p>
                        <a href="#" class="yellow-text">View on blockchain</a>
                    </div>

                    <div class="mt-3 text-center">
                        <a href="#" class="seeMore">
                            See more<i class="fa fa-angle-down ml-2"></i>
                        </a>
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
