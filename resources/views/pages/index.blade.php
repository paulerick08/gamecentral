@extends('layouts.default')

@section('title', 'Gameworks Central')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/index.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="col-lg-9 col-md-12 col-sm-12 mx-auto" id="home">
        <div class="banner-txt">
            <span class="white-text">Licensed Gaming Platform for</span><br>
            <span class="yellow-text">Players and Game Publishers</span>
        </div>

        <div class="decentralized col-lg-9 col-md-12 col-sm-12 mx-auto d-flex">
            <img src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}">
            <h1 class="eos-txt mt-1 mb-0">DECENTRALIZED ON EOS</h1>
            <img src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}">
        </div>

        <div class="separator">
            <hr class="hr-left" /><span class="hr-text">HOW IT WORKS</span><hr class="hr-right" />
        </div>

        <div class="diamond-icons d-lg-flex d-md-flex d-block">
            <div class="col mr-lg-2">
                <img src="{{ config('app.asset_url').'/images/index/signup-icon.png' }}"><br>
                <span>Sign up and get a free EOS account</span>
            </div>

            <div class="col mr-lg-2">
                <img src="{{ config('app.asset_url').'/images/index/wallet-icon.png' }}"><br>
                <span>Load your Wallet with EOS or GWX</span>
            </div>

            <div class="col mr-lg-2">
                <img src="{{ config('app.asset_url').'/images/index/game-icon.png' }}"><br>
                <span>Play <br> any game</span>
            </div>

            <div class="col mr-lg-2">
                <img src="{{ config('app.asset_url').'/images/index/wallet-icon.png' }}"><br>
                <span>Win BIG!</span>
            </div>

            <div class="col">
                <img src="{{ config('app.asset_url').'/images/index/token-icon.png' }}"><br>
                <span>Withdraw Tokens Anytime</span>
            </div>
        </div>

        <div class="newest-games mt-lg-5 mt-md-5 mt-3 pt-4 pb-3 text-center">
            <span class="title">NEWEST GAMES</span>

            <div class="mt-3">
                <div v-for="index in 4" class="col text-center mt-3 new-games">
                    <a href="#">
                        <img src="{{ config('app.asset_url').'/images/joker-poker.png' }}" class="mb-2" width="100%">
                        <div>
                            <span class="white-text">TEN PLAY POKER</span><br>
                            <small class="yellow-text">POKER</small>
                        </div>
                    </a>
                </div>
            </div>

            <div class="categories my-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu1">GAMES OF CHANCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">GAMES OF SKILLS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3">FEATURED GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu4">UPCOMING GAMES</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="menu1" class="container text-left tab-pane active">
                        <div v-for="index in 15" class="col game mt-5 text-center">
                            <a href="#">
                                <img src="{{ config('app.asset_url').'/images/baccarrat.png' }}" class="mb-2" width="100%">
                                <span class="white-text">BACCARAT</span><br>
                                <small class="yellow-text">TABLE</small>
                            </a>
                        </div>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                        <div v-for="index in 15" class="col game mt-5 text-center">
                            <a href="#">
                                <img src="{{ config('app.asset_url').'/images/sakura.png' }}" class="mb-2" width="100%">
                                <span class="white-text">LUCKY SAKURA</span><br>
                                <small class="yellow-text">SLOT</small>
                            </a>
                        </div>
                    </div>
                    <div id="menu3" class="container tab-pane fade">
                        <div v-for="index in 15" class="col game mt-5 text-center">
                            <a href="#">
                                <img src="{{ config('app.asset_url').'/images/jurassic.png' }}" class="mb-2" width="100%">
                                <span class="white-text">JURASSIC JUNGLE</span><br>
                                <small class="yellow-text">SLOT</small>
                            </a>
                        </div>
                    </div>
                    <div id="menu4" class="container tab-pane fade">
                        <div v-for="index in 15" class="col game mt-5 text-center">
                            <a href="#">
                                <img src="{{ config('app.asset_url').'/images/keno.png' }}" class="mb-2" width="100%">
                                <span class="white-text">4X KENO</span><br>
                                <small class="yellow-text">TABLE</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('extra_scripts')
        <script>
            new Vue({
                el: '#home',
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
