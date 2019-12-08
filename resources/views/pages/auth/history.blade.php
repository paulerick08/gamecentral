@extends('layouts.default')

@section('title', 'History')


@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/history.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent" v-cloak>
            <div class="col-12 px-0 d-lg-flex d-md-block d-block">
                <div class="col-lg-8 col-md-12 col-12 title px-0 d-flex">
                    <div class="leftBorder"></div>
                    <div class="d-flex align-items-center p-2">
                        <h4 class="mb-0 mt-1">History</h4>
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
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        {{-- <a class="nav-link active" data-toggle="tab" href="#menu1">DEPOSIT</a> --}}
                        <a id="nav-link-1" class="nav-link active" href="javascript:void(0)">DEPOSIT</a>
                        <div class="depositType d-flex">
                            <div class="mr-5">
                                <input id="radio-1" class="radio-custom mr-2" name="transactionType" type="radio" v-model="transactionType" value="depositCrypto" @click="activeDepositTab">
                                <label for="radio-1" class="radio-custom-label">Crypto</label>
                            </div>
                            <div>
                                <input id="radio-2" class="radio-custom mr-2" name="transactionType" type="radio" v-model="transactionType" value="depositCash" @click="activeDepositTab">
                                <label for="radio-2" class="radio-custom-label">Cash</label>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" data-toggle="tab" href="#menu2">WITHDRAWAL</a> --}}
                        <a id="nav-link-2" class="nav-link" href="javascript:void(0)">WITHDRAWAL</a>
                        <div class="withdrawType d-flex">
                            <div class="mr-5">
                                <input id="radio-3" class="radio-custom mr-2" name="transactionType" type="radio" v-model="transactionType" value="withdrawCrypto" @click="activeWithdrawTab">
                                <label for="radio-3" class="radio-custom-label">Crypto</label>
                            </div>
                            <div>
                                <input id="radio-4" class="radio-custom mr-2" name="transactionType" type="radio" v-model="transactionType" value="withdrawCash" @click="activeWithdrawTab">
                                <label for="radio-4" class="radio-custom-label">Cash</label>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tab-content mb-3">
                    <div id="menu1" class="container text-left tab-pane active px-0">
                        <table v-if="transactionType == 'depositCrypto'" class="table deposit table-striped mb-0">
                            <thead>
                                <th>ID</th>
                                <th>TX ID</th>
                                <th>Token</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                <tr v-for="index in 10">
                                    <td>0001</td>
                                    <td>YYHHJJKSLEKJFEWJ324NCWOEBQKJAHEBD123ER</td>
                                    <td>GWX</td>
                                    <td>1,471,000</td>
                                    <td>Feb. 3 2019 4:30PM</td>
                                </tr>
                            </tbody>
                        </table>
                        <table v-if="transactionType == 'depositCash'" class="table deposit table-striped mb-0">
                            <thead>
                                <th>ID</th>
                                <th>Method</th>
                                <th>Currency</th>
                                <th>Amount</th>
                                <th>Card/Account</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                <tr v-for="index in 10">
                                    <td>0001</td>
                                    <td>Credit Card</td>
                                    <td>USD</td>
                                    <td>1,471,000</td>
                                    <td>xxxxxxxxx4572</td>
                                    <td>Feb. 3 2019 4:30PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu2" class="container tab-pane fade px-0">
                        <table v-if="transactionType == 'withdrawCrypto'" class="table withdrawal table-striped mb-0">
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
                        <table v-if="transactionType == 'withdrawCash'" class="table withdrawal table-striped mb-0">
                            <thead>
                                <th>ID</th>
                                <th>Currency</th>
                                <th>Amount</th>
                                <th>Recipient Account</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                <tr v-for="index in 10">
                                    <td>0001</td>
                                    <td>USD</td>
                                    <td>1,471,000</td>
                                    <td>xxxxxxxxx4572</td>
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
                        transactionType: 'depositCrypto',
                    };
                },
                methods: {
                    activeDepositTab: function() {
                        $('#nav-link-1').addClass('active');
                        $('#nav-link-2').removeClass('active');
                        $('#menu1').addClass('active');
                        $('#menu1').removeClass('fade');
                        $('#menu2').addClass('fade');
                        $('#menu2').removeClass('active');
                    },
                    activeWithdrawTab: function() {
                        $('#nav-link-1').removeClass('active');
                        $('#nav-link-2').addClass('active');
                        $('#menu1').addClass('fade');
                        $('#menu1').removeClass('active');
                        $('#menu2').addClass('active');
                        $('#menu2').removeClass('fade');
                    },
                }
            });
        </script>
    @endsection
@endsection
