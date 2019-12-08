@extends('layouts.default')

@section('title', 'Token Swap')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/token_swap.css' }}" rel="stylesheet" type="text/css">
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
                    <h4 class="mb-0 mt-1">GWX Token Swap</h4>
                </div>
            </div>
            <div class="mt-4">
                <span class="instruction">Instructions to convert your NEM tokens to GWX tokens.</span>
            </div>
            <div class="mt-4">
                <span class="bold-text">Key Points</span>
            </div>
            <img src="{{ config('app.asset_url').'/images/auth/NEM-EOS.png' }}" class="logo">
            <div class="mt-4">
                <div class="align-items-center d-flex">
                    <i class="fa fa-circle mr-2"></i><span>You will receive EOS GWX for each NEM GWX you have</span>
                </div>
                <div class="align-items-center d-flex mt-2">
                    <i class="fa fa-circle mr-2"></i><span>The max supply of EOS GWX is 90 million</span>
                </div>
                <div class="align-items-center d-flex mt-2">
                    <i class="fa fa-circle mr-2"></i><span>The Supply NEM GWX was 9 billion</span>
                </div>
                <div class="align-items-center d-flex mt-2">
                    <i class="fa fa-circle mr-2"></i><span>The price of EOS GWX tokens is 100 times higher</span>
                </div>
            </div>
            <div class="mt-5">
                <span class="instruction">To convert your NEM GWX tokens to EOS GWX tokens, send your NEM based coins to the following address:</span>
                <div class="mt-2">
                    <input type="text" id="address1" value="QWERTYUIOPDTFGYHUJIKLSEDRFTGYHUJ" readonly>
                    <button type="button" class="btn ml-2" @click="copyAddress('address1')">
                        <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                    </button>
                </div>
            </div>
            <div class="mt-5">
                <span class="instruction">NEM transactions support memos. In the memo field, enter your Gameworks EOS address.</span><br>
                <span class="instruction">Your Gameworks EOS address is:</span>
                <div class="mt-2">
                    <input type="text" id="address2" value="elephant1472" readonly>
                    <button type="button" class="btn ml-2" @click="copyAddress('address2')">
                        <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                    </button>
                </div>
            </div>
            <div class="mt-5 bottomDescription">
                <span class="instruction">Once your NEM transaction is completed, you will see your new EOS-based GWX tokens in your Gameworks wallet within 5 minutes.</span><br>
                <span class="instruction">If you don't see them credited, please send your NEM transaction ID and your Gameworks EOS address to </span><span class="yellow-text">support@gameworks.io</span><br>
                <span class="instruction">If you have any questions in this process, post them in our telegram here</span> <a href="https://t.me/gameworks" target="_blank" class="yellow-text">https://t.me/gameworks</a>
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
