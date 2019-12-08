@extends('layouts.default')

@section('title', 'Two Factor Authentication')

@section('extra_css')
	<link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
	<link href="{{ config('app.asset_url').'/css/two-fa.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
	<div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-8 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent">
            <div class="col-12 px-0 title d-flex">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <h4 class="mb-0 mt-1">Two Factor Authentication</h4>
                </div>
            </div>
            <div class="col-12 px-0 mt-3 tab-switch">
				<div class="onoffswitch">
				    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" @click="toggleSwitch">
				    <label class="onoffswitch-label" for="myonoffswitch">
				        <span class="onoffswitch-inner"></span>
				        <span class="onoffswitch-switch"></span>
				    </label>
				</div>
				<div v-if="enabled" class="on-fa mt-3">
					<p class="gray-text">Two Factor Authentication is currently enabled for your account through Google Authenticator.</p>
					<p class="gray-text">Enter the code from your Authenticator device to disable 2FA.</p>
					<div class="mt-3">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator mr-2">
                        <input type="number" class="authenticator">
                    </div>
					<button type="disable" class="btn btn-disable ml-0 mt-4 px-4">DISABLE</button>
				</div>
				<div v-else class="off-fa mt-3">
					<p class="gray-text">Two Factor Authentication is currently disabled for your account. To add 2FA,
						first
						download the Authenticator app for your mobile device.</p>
					<div class="my-3">
						<img src="{{ asset('/images/global/app_store.png') }}" alt="app-store" class="store mr-2">
						<img src="{{ asset('/images/global/google_play.png') }}" alt="play-store">
					</div>
					<p class="gray-text">Once you have this installed click the "+" button inside the app and scan the QR code below.</p>
					<div class="mt-3 qrCode">
                        <img src="{{ config('app.asset_url').'/images/auth/qr.png' }}">
                    </div>
					<div class="success mt-3">
						<p>Congrats! You have enabled 2FA for your account. Save the secret key below to your computer somewhere. If you lose your phone you can restore your entry to Authentication with the key below.</p>
					</div>
					<div class="mt-2">
	                    <input class="addressInput" type="text" id="address1" value="QWERTYUIOPDTFGYHUJIKLSEDRFTGYHUJ" readonly>
	                    <button type="button" class="btn ml-2" @click="copyAddress('address1')">
	                        <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
	                    </button>
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
                        enabled: false,
                    };
                },
                methods: {
                    toggleSwitch: function() {
                    	if(this.enabled == true) {
	                    	this.enabled = false;
                    	} else {
	                    	this.enabled = true;
                    	}
                    },
                    copyAddress: function(id) {
                        var copyText = $('#' + id);
                        copyText.select();
                        document.execCommand("copy");
                    }
                }
            });
        </script>
    @endsection
@stop
