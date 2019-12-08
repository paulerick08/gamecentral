@extends('layouts.default')

@section('title', 'Personal Details')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/personal_details.css' }}" rel="stylesheet" type="text/css">
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
                    <h4 class="mb-0 mt-1">Personal Details</h4>
                </div>
            </div>
            <div class="d-flex mt-4 col-lg-8 col-md-12 col-12 px-0">
                <div class="col-6 pl-0">
                    <div>
                        <label>First Name</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Email Address</label><br>
                        <input type="email">
                    </div>
                    <div class="mt-3">
                        <label>Address Line 1</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>City</label><br>
                        <input type="text">
                    </div>
                </div>
                <div class="col-6 px-0">
                    <div>
                        <label>Last Name</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Country</label><br>
                        <select>
                          <option>Select</option>
                          <option>Saab</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label>Address Line 2</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Postal/Zip Code</label><br>
                        <input type="number">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pl-0">
                <label class="checkbox">I would like to receive emails about promotions and events happening at Gameworks
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-12 px-0">
                <button type="button" class="btn py-2 px-5 mt-4">SAVE</button>
            </div>
        </div>
    </div>
@endsection
