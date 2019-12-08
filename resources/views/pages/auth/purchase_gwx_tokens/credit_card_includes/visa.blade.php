<div id="menu1" class="container tab-pane cc-tab-pane px-0 active">
    <div class="col px-0 text-left amount">
        <span class="number mr-4">1</span> <span class="how">How much GWX would you like to purchase?</span>
        <div class="my-4">
            <label class="mb-0">
                <input type="radio" name="amount" v-model="visaAmount" value="30"/>
                <div class="box">
                    <span>$30</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="visaAmount" value="50"/>
                <div class="box">
                    <span>$50</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="visaAmount" value="100"/>
                <div class="box">
                    <span>$100</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="visaAmount" value="200"/>
                <div class="box">
                    <span>$200</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="visaAmount" value="500"/>
                <div class="box">
                    <span>$500</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="visaAmount" value="Other"/>
                <div class="box">
                    <span>Other</span>
                </div>
            </label>
        </div>
        <div v-if="visaAmount == 'Other'" class="otherAmount">
            <label>$</label>
            <input type="number" class="mb-3" v-model="visaOtherAmount"><br>
            <small class="gray-text">You will be debited $</small><small class="gray-text" v-text="visaOtherAmount"></small><br>
            <div v-if="visaOtherAmount">
                <span>$</span><span v-text="visaOtherAmount"></span><span> = </span><span>1462.2353 GWX</span><br>
                <small class="gray-text rate">Rate valid for 60 more seconds...</small>
            </div>
        </div>
        <div v-else>
            <small class="gray-text">You will be debited $</small><small class="gray-text" v-text="visaAmount"></small><br>
            <div v-if="visaAmount">
                <span>$</span><span v-text="visaAmount"></span><span> = </span><span>1462.2353 GWX</span><br>
                <small class="gray-text rate">Rate valid for 60 more seconds...</small>
            </div>
        </div>
    </div>
    <div class="col px-0">
        <div>
            <div class="float-left">
                <span class="number mr-4">2</span> <span class="how">Enter Payment Information</span>
            </div>
            <div class="float-right">
                <img src="{{ config('app.asset_url').'/images/auth/purchase/visa-secure.png' }}" class="visaSecure">
                <img src="{{ config('app.asset_url').'/images/auth/purchase/master-id-check.png' }}" class="idCheck">
            </div>
        </div>
        <div class="my-4">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Use saved credit card<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">Ending in 6342</a></li>
                    <li><a href="javascript:void(0)">Ending in 1233</a></li>
                </ul>
            </div>
            <div class="d-flex">
                <div class="mt-4">
                    <img src="{{ config('app.asset_url').'/images/auth/purchase/card.png' }}" class="cardImg">
                    <input type="number" class="cardNumber mr-2" placeholder="Card Number">
                </div>
                <div class="mr-2">
                    <small class="gray-text">Expiry Date</small><br>
                    <div class="d-flex">
                        <select class="mr-1">
                            <option value="" disabled selected>MM</option>
                        </select>
                        <select>
                            <option value="" disabled selected>YYYY</option>
                        </select>
                    </div>
                </div>
                <div>
                    <small class="gray-text">Security Code (CVV/CVC)</small><br>
                    <input type="number" class="securityCode">
                    <img src="{{ config('app.asset_url').'/images/auth/purchase/card-back.png' }}">
                </div>
            </div>
            <div class="mt-3">
                <div class="float-left mt-2">
                    <small class="gray-text">Card Holder Details:</small> <small><i>John Smith, Lt2 Blk2 ...</i></small>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#editModal">
                        <img src="{{ config('app.asset_url').'/images/auth/purchase/edit-pen.png' }}" class="editPen">
                    </a>
                </div>
                <button class="float-right yellow-button px-4">DEPOSIT</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content py-4 px-lg-5 px-md-5 px-4">
            <div class="modal-header d-block text-center">
                <div class="mt-2">
                    <p class="mb-0">EDIT CARD HOLDER DETAILS</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <div>
                    <small>Name</small><br>
                    <input type="text" autofocus>
                </div>
                <div class="mt-3">
                    <small>Address</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="modal-footer text-center d-block">
                <div class="col-12 px-0">
                    <button type="button" class="btn p-3">SAVE</button>
                </div>
            </div>
        </div>
    </div>
</div>
