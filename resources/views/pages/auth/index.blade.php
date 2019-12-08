@extends('layouts.default')

@section('title', 'Gameworks Central')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-0 pb-5" id="rightContent">
            <div class="col-12 px-0 title d-flex">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <img src="{{ config('app.asset_url').'/images/logo-only.png' }}" class="gwxLogo mr-2">
                    <h6 class="mb-0 mt-1">DAILY GWX RAFFLE</h6>
                </div>
            </div>

            <div class="mt-4 d-lg-flex d-md-block d-block align-items-center subContent">
                <div class="col-lg-2 col-md-12 col-12 px-0">
                    <h5 class="mb-0">DRAWING FOR NOVEMBER 11, 2019 IN...</h5>
                </div>
                <div class="countdown d-flex">
                    <div class="hours text-center">
                        <div class="time d-flex">
                            <div class="mr-1">0</div>
                            <div>1</div>
                        </div>
                        <span>HOURS</span>
                    </div>
                    <div class="minutes text-center px-2">
                        <div class="time d-flex">
                            <div class="mr-1">0</div>
                            <div>7</div>
                        </div>
                        <span>MINUTES</span>
                    </div>
                    <div class="seconds text-center">
                        <div class="time d-flex">
                            <div class="mr-1">5</div>
                            <div>4</div>
                        </div>
                        <span>SECONDS</span>
                    </div>
                </div>
                <div class="col align-items-center px-0 d-lg-flex d-md-flex d-block ml-lg-3">
                    <h4 class="white-text mb-0">CURRENT PRIZE: <span class="yellow-text">13,685 GWX</span></h4>
                </div>
                <div class="my-auto d-flex">
                    <button class="px-3 py-2 mr-2">BUY YOUR TICKETS NOW!</button>
                    <div class="popup1 d-none p-2">
                        <span class="white-text">A winning ticket is selected randomly through EOS blockchain. See the algorithm for selecting <a href="#" class="yellow-text">here</a>.</span>
                    </div>
                    <span class="fa-stack mt-1" @click="openPopup(1)" @mouseleave="closePopup(1)">
                        <i class="fa fa-circle"></i>
                        <span class="question"> ? </span>
                    </span>
                </div>
            </div>

            <div class="col-12 px-0 title d-flex mt-4">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <img src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}" class="eosLogo mr-2">
                    <h6 class="mb-0 mt-1">DAILY EOS RAFFLE</h6>
                </div>
            </div>

            <div class="mt-4 d-lg-flex d-md-block d-block align-items-center subContent">
                <div class="col-lg-2 col-md-12 col-12 px-0">
                    <h5 class="mb-0">DRAWING FOR NOVEMBER 11, 2019 IN...</h5>
                </div>
                <div class="countdown d-flex">
                    <div class="hours text-center">
                        <div class="time d-flex">
                            <div class="mr-1">1</div>
                            <div>3</div>
                        </div>
                        <span>HOURS</span>
                    </div>
                    <div class="minutes text-center px-2">
                        <div class="time d-flex">
                            <div class="mr-1">0</div>
                            <div>6</div>
                        </div>
                        <span>MINUTES</span>
                    </div>
                    <div class="seconds text-center">
                        <div class="time d-flex">
                            <div class="mr-1">2</div>
                            <div>4</div>
                        </div>
                        <span>SECONDS</span>
                    </div>
                </div>
                <div class="col align-items-center px-0 d-lg-flex d-md-flex d-block ml-lg-3">
                    <h4 class="white-text mb-0">CURRENT PRIZE: <span class="yellow-text">27,734 EOS</span></h4>
                </div>
                <div class="my-auto d-flex">
                    <button class="px-3 py-2 mr-2">BUY YOUR TICKETS NOW!</button>
                    <div class="popup2 d-none p-2">
                        <span class="white-text">A winning ticket is selected randomly through EOS blockchain. See the algorithm for selecting <a href="#" class="yellow-text">here</a>.</span>
                    </div>
                    <span class="fa-stack mt-1" @click="openPopup(2)" @mouseleave="closePopup(2)">
                        <i class="fa fa-circle"></i>
                        <span class="question"> ? </span>
                    </span>
                </div>
            </div>

            <div class="col-12 px-0 title d-flex mt-4">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <i class="far fa-star yellow-text mr-2"></i>
                    <h6 class="mb-0 mt-1">FEATURED GAMES</h6>
                </div>
            </div>

            <div class="mt-3 subContent">
                <div v-for="index in 4" class="col featured-games text-center mt-3">
                    <a href="#">
                        <img src="{{ config('app.asset_url').'/images/joker-poker.png' }}" class="mb-2">
                        <span class="white-text">TEN PLAY POKER</span>
                    </a>
                </div>
            </div>

            <div class="col-12 px-0 title d-flex mt-4">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <img src="{{ config('app.asset_url').'/images/auth/most-popular-icon.png' }}" class="fireIcon mr-2">
                    <h6 class="mb-0 mt-1">MOST POPULAR GAMES LAST 24 HOURS</h6>
                </div>
            </div>

            <div class="mt-3 subContent">
                <div v-for="index in 15" class="col popular-games text-center mt-3">
                    <a href="#">
                        <img src="{{ config('app.asset_url').'/images/joker-poker.png' }}" class="mb-2">
                        <span class="white-text">TEN PLAY POKER</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @section('extra_scripts')
        <script>
            new Vue({
                el: '#rightContent',
                mounted: function () {
                    $('[data-toggle="tooltip"]').tooltip();
                },
                methods: {
                    openPopup: function(val) {
                        $('.popup' + val).addClass('d-block');
                        $('.popup' + val).removeClass('d-none');
                    },
                    closePopup: function(val) {
                        setTimeout(function() {
                            $('.popup' + val).removeClass('d-block');
                            $('.popup' + val).addClass('d-none');
                        }, 5000);
                    },
                }
            });
        </script>
    @endsection
@endsection