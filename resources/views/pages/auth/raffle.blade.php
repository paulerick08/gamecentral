@extends('layouts.default')

@section('extra_css')
	<link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
	<link href="{{ config('app.asset_url').'/css/raffle.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
	<div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block pl-lg-4 pr-lg-0 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-8 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent">
            <div class="col-12 px-0 title d-flex">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <h4 class="mb-0 mt-1">GWX Daily Raffle</h4>
                </div>
            </div>
            <div class="notification d-flex float-right">
                <img src="{{ config('app.asset_url').'/images/auth/ticket.png' }}" class="m-2">
                <span>25 tickets purchased!</span>
            </div>
            <div class="mt-4 col-lg-6 col-md-8 col-12 px-0">
            	<div class="countdown text-center">
					<h5 class="mb-3">DRAWING IN...</h5>
					<div class="count-timer">
						<div class="hours box" data-label="Hours">
							<span>0</span>
							<span>1</span>
						</div>
						<div class="minutes box" data-label="Minutes">
							<span>0</span>
							<span>7</span>
						</div>
						<div class="seconds box" data-label="Seconds">
							<span>5</span>
							<span>4</span>
						</div>
					</div>
					<div class="text-center mt-5">
						<h2 class="mb-1">Current Prize</h2>
						<h2 class="yellow-text text-uppercase mb-3">10,574 GWX</h2>
						<p class="text-small py-2 ratio">1 ticket = 1 GWX</p>
						<p class="tickets"><span class="yellow-text">11,324</span> of <span class="yellow-text">100,000</span> tickets purchased!<br>Hit the buttons below to buy your tickets.</p>
						<div class="button-container mb-3">
							<a href="#" class="rounded-circle times-one btn">1x</a>
							<a href="#" class="rounded-circle times-one btn">5x</a>
							<a href="#" class="rounded-circle times-one btn">10x</a>
							<a href="#" class="rounded-circle times-one btn">25x</a>
							<a href="#" class="rounded-circle times-one btn">100x</a>
						</div>
						<p class="text-xsmall mb-4">Current Balance: <span class="yellow-text">1,255.3437</span> <span class="yellow-text">GWX</span></p>
						<h4 class="mb-3">You currently have <span class="yellow-text tickets-count">125</span> <span class="yellow-text">tickets</span>. Good luck!</h4>
						<a href="#" class="view-tickets yellow-text">View my tickets on the blockchain</a>
					</div>
				</div>
            </div>
        </div>
    </div>
@stop
