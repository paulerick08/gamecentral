@extends('layouts.default')

@section('title', 'Playing History')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/playing_history.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent">
            <div class="col-12 px-0 d-lg-flex d-md-block d-block">
                <div class="col-lg-8 col-md-12 col-12 title px-0 d-flex">
                    <div class="leftBorder"></div>
                    <div class="d-flex align-items-center p-2">
                        <h4 class="mb-0 mt-1">Playing History</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 export px-0 text-right">
                    <button type="button" class="btn mr-2">
                        <img src="{{ config('app.asset_url').'/images/auth/csv-icon.png' }}" class="mr-1"> EXPORT TO CSV
                    </button>
                    <button type="button" class="btn">
                        <img src="{{ config('app.asset_url').'/images/auth/xls-icon.png' }}" class="mr-1"> EXPORT TO XLS
                    </button>
                </div>
            </div>
            <div class="history mt-3">
                <div class="tab-content mb-3">
                    <div id="menu1" class="container text-left tab-pane active px-0">
                        <table class="table deposit table-striped mb-0">
                            <thead>
                                <th>IGAME ID</th>
                                <th>TX ID</th>
                                <th>Game</th>
                                <th>Token</th>
                                <th>Result</th>
                                <th>Ending Balance</th>
                            </thead>
                            <tbody>
                                <tr v-for="index in 10">
                                    <td>0001</td>
                                    <td>YYHHJJKSLEKJFEWJ324NCWOEBQKJAHEBD123ER</td>
                                    <td>GWX</td>
                                    <td>1,471,000</td>
                                    <td>Feb. 3 2019 4:30PM</td>
                                    <td>123.456789</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu2" class="container tab-pane fade px-0">
                        <table class="table withdrawal table-striped mb-0">
                            <thead>
                                <th>ID</th>
                                <th>TX ID</th>
                                <th>Token</th>
                                <th>Amount</th>
                                <th>Recipient Address</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                <tr v-for="index in 10">
                                    <td>0001</td>
                                    <td>YYHHJJKSLEKJFEWJ324NCWOEBQKJAHEBD123ER</td>
                                    <td>GWX</td>
                                    <td>1,471,000</td>
                                    <td>UISEIURLWE</td>
                                    <td>Feb. 3 2019 4:30PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="#" class="yellow-text ml-4">See more</a>
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
