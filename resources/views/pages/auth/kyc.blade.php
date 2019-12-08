@extends('layouts.default')

@section('title', 'Complete KYC')

@section('extra_css')
    <link href="{{ config('app.asset_url').'/css/home.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ config('app.asset_url').'/css/kyc.css' }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="searchBar px-3 pt-4 {{ Request::path() != '/' ? 'd-lg-none d-md-none d-block' : 'd-none' }}">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search for games...">
    </div>

    <div class="d-lg-flex d-md-flex d-block px-lg-4 px-md-3 px-3 py-lg-3 py-md-3 py-4">
        @include('includes.auth.sidebar')

        <div class="col-lg-9 col-md-9 col-12 content pr-lg-0 pr-md-3 pr-2 pb-5" id="rightContent" v-cloak>
            <div class="col-12 px-0 title d-flex">
                <div class="leftBorder"></div>
                <div class="d-flex align-items-center p-2">
                    <h4 class="mb-0 mt-1">Complete KYC</h4>
                </div>
            </div>
            <div class="d-lg-flex d-md-block d-block mt-4 col-12 px-0">
                <div class="col pl-0 pr-1">
                    <div>
                        <label>First Name</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Date of Birth</label><br>
                        <div class="d-flex">
                            <select>
                                <option value="" selected disabled>Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <select class="mx-2">
                                <option value="" selected disabled>DD</option>
                                <option v-for="index in 31" value="index" v-text="index"></option>
                            </select>
                            <select>
                                <option value="" selected disabled>YYYY</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Citizenship</label><br>
                        <input type="text">
                    </div>
                </div>
                <div class="col px-2">
                    <div>
                        <label>Middle Name <span>(Optional)</span></label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Place of Birth</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Current Address</label><br>
                        <input type="text">
                    </div>
                </div>
                <div class="col pl-1 pr-0">
                    <div>
                        <label>Last Name</label><br>
                        <input type="text">
                    </div>
                    <div class="mt-3">
                        <label>Sex</label><br>
                        <select>
                            <option value="" selected disabled>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label>Phone Number</label><br>
                        <input type="number">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 px-0">
                <label>Please select what kind of photo ID you will upload:</label><br>
                <select class="select-id">
                    <option value="" selected disabled>Select</option>
                    <option value="Passport">Passport</option>
                    <option value="Driver's License">Driver's License</option>
                </select>
                <div class="d-lg-flex d-md-flex d-block">
                    <div v-show="uploadedFrontImage" class="mt-3 mr-3">
                        <div class="uploadedImage">
                            <button class="p-0" @click="removeFrontImage">
                                <img src="{{ config('app.asset_url').'/images/auth/delete-icon.png' }}" class="m-2">
                            </button>
                            <img :src="uploadedFrontImage" class="userImage p-2">
                        </div>
                        <small v-if="uploadedFrontImageName" v-text="uploadedFrontImageName" class="gray-text mt-2"></small>
                    </div>
                    <div v-show="!uploadedFrontImage" class="uploadId mt-3 mr-3 p-2">
                        <div class="dasahedDiv">
                            <div class="label">
                                <span>Click or drag inside to upload your file</span><br>
                            </div>
                            <input type="file" id="id-front" name="id-front" @change="readFrontImage">
                        </div>
                    </div>
                    <div v-show="uploadedBackImage" class="mt-3 mr-3">
                        <div class="uploadedImage2">
                            <button class="p-0" @click="removeBackImage">
                                <img src="{{ config('app.asset_url').'/images/auth/delete-icon.png' }}" class="m-2">
                            </button>
                            <img :src="uploadedBackImage" class="userImage p-2">
                        </div>
                        <small v-if="uploadedBackImageName" v-text="uploadedBackImageName" class="gray-text mt-2"></small>
                    </div>
                    <div v-show="uploadedFrontImage && !uploadedBackImage" class="uploadId mt-3 mr-3 p-2">
                        <div class="dasahedDiv">
                            <div class="label2 text-center">
                                <span>Click or drag inside to upload your file</span><br>
                                <span class="gray-text">(Back of Card)</span>
                            </div>
                            <input type="file" id="id-back" name="id-back" @change="readBackImage">
                        </div>
                    </div>
                    <div class="col max mt-4 pt-4 px-0">
                        <span class="gray-text">Maximum file size:</span> <span class="white-text">4MB</span><br>
                        <span class="gray-text">Acceptable file type:</span> <span class="white-text">JPEG, GIF, PNG, and PDF</span>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mt-5">
                <button type="button" class="submitButton py-2">SUBMIT</button>
            </div>
        </div>
    </div>

    @section('extra_scripts')
        <script>
            new Vue({
                el: '#rightContent',
                data: function() {
                    return {
                        uploadedFrontImage: null,
                        uploadedFrontImageName: null,
                        uploadedBackImage: null,
                        uploadedBackImageName: null,
                    };
                },
                methods: {
                    readFrontImage: function() {
                        var app = this, input = event.target;

                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                app.uploadedFrontImage = e.target.result;
                                app.uploadedFrontImageName = input.files[0].name;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    },
                    removeFrontImage: function() {
                        this.uploadedFrontImage = null;
                    },
                    readBackImage: function() {
                        var app = this, input = event.target;

                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                app.uploadedBackImage = e.target.result;
                                app.uploadedBackImageName = input.files[0].name;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    },
                    removeBackImage: function() {
                        this.uploadedBackImage = null;
                    },
                }
            });
        </script>
    @endsection
@endsection
