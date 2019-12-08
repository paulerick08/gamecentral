@extends('layouts.default')

@section('title', 'Change Password')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/change_password.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent">
            <form action="{{ route('change.password') }}" method="POST">
                @csrf
                <div class="col-12 px-0 title d-flex">
                    <div class="leftBorder"></div>
                    <div class="d-flex align-items-center p-2">
                        <h4 class="mb-0 mt-1">Change Password</h4>
                    </div>
                </div>
                <div class="mt-4 col-lg-4 col-md-10 col-12 px-0">
                    @if ($errors->any())
                    <div class="error text-center p-2 mb-3">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                    @elseif(Session::has('error'))
                    <div class="error text-center p-2 mb-3">
                        <div class="alert alert-success">
                            <p class="mb-0">{{ Session::get('error') }}</p>
                        </div>
                    </div>
                    @elseif(Session::has('success'))
                    <div class="success text-center p-2 mb-3">
                        <div class="alert alert-success">
                            <p class="mb-0">{{ Session::get('success') }}</p>
                        </div>
                    </div>
                    @endif
                    <div>
                        <label>Enter your current Password</label><br>
                        <input type="password" name="current_password">
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="errorMessage p-2">
                            <small>Your current password is incorrect. Please try again.</small>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Enter the new Password</label><br>
                        <input type="password" name="new_password">
                    </div>
                    <div class="mt-3">
                        <label>Confirm the new Password</label><br>
                        <input type="password" name="new_password_confirmation">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <button type="submit" class="btn py-2 mt-4">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
@endsection
