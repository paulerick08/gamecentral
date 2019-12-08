@extends('layouts.default')

@section('title', 'User Preferences')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/user_preferences.css' }}" rel="stylesheet" type="text/css">
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
                    <h4 class="mb-0 mt-1">User Preferences</h4>
                </div>
            </div>
            <div class="mt-4 col-12 px-0">
                <div>
                     <label>Enable Sounds</label>
                     <div class="d-flex my-2">
                         <div class="toggleButton mr-5">
                            <input type="radio" name="sounds" class="mr-2" checked>
                            <span>Yes</span>
                        </div>
                        <div class="toggleButton">
                            <input type="radio" name="sounds" class="mr-2">
                            <span>No</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                     <label>Username Display</label>
                     <div class="d-flex my-2">
                         <div class="toggleButton mr-5">
                            <input type="radio" name="username" class="mr-2">
                            <span>Art Arbio</span>
                        </div>
                        <div class="toggleButton mr-5">
                            <input type="radio" name="username" class="mr-2" checked>
                            <span>Art A.</span>
                        </div>
                        <div class="toggleButton mr-5">
                            <input type="radio" name="username" class="mr-2">
                            <span>Art</span>
                        </div>
                        <div class="toggleButton">
                            <input type="radio" name="username" class="mr-2">
                            <span>Manonfire157 <img src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}"></span>
                        </div>
                    </div>
                    <div class="mt-4">
                         <label>Be Visible in Daily Leader Boards?</label>
                         <div class="d-flex my-2">
                             <div class="toggleButton mr-5">
                                <input type="radio" name="borders" class="mr-2" checked>
                                <span>Yes</span>
                            </div>
                            <div class="toggleButton">
                                <input type="radio" name="borders" class="mr-2">
                                <span>No</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                         <label>Receive Emails on  New Games and News from Gameworks?</label>
                         <div class="d-flex my-2">
                             <div class="toggleButton mr-5">
                                <input type="radio" name="news" class="mr-2" checked>
                                <span>Yes</span>
                            </div>
                            <div class="toggleButton">
                                <input type="radio" name="news" class="mr-2">
                                <span>No</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                         <label>Estimated Total Display</label>
                         <div class="d-flex my-2">
                             <div class="toggleButton2 mr-5">
                                <input type="radio" name="total" class="mr-2" checked>
                                <span>Show in USD ($)</span>
                            </div>
                            <div class="toggleButton">
                                <input type="radio" name="total" class="mr-2">
                                <span>Show in RMB (&yen;)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
@endsection
