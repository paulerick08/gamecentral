<div v-if="purchaseMethod == 'Crypto'" class="purchase mt-3">
    <ul class="nav nav-tabs text-center">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu1"><img src="{{ config('app.asset_url').'/images/auth/purchase/btc.png' }}" class="mr-2 btc"><span>BTC</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2"><img src="{{ config('app.asset_url').'/images/auth/purchase/eth.png' }}" class="mr-2 eth"><span>ETH</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3"><img src="{{ config('app.asset_url').'/images/auth/purchase/eos.png' }}" class="mr-2 eos"><span>EOS</span></a>
        </li>
    </ul>
    <div class="tab-content px-4 py-5">
        <div id="menu1" class="container text-left tab-pane active">
            <span>To purchase GWX with BTC, send BTC to the address below. You must send between 0.005 BTC and 5 BTC</span>
            <div class="my-4">
                <input type="text" id="btcAddress" value="QWERTYUIOPDTFGYHUJIKLSEDRFTGYHUJ" readonly>
                <button type="button" class="yellow-button btn ml-2" @click="copyAddress('btcAddress')">
                    <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                </button>
            </div>
            <span>If you're sending from a mobile device, scan the following QR code, which is the same as the address above.</span>
            <div class="mt-3 qrCode p-lg-5">
                <img src="{{ config('app.asset_url').'/images/auth/qr.png' }}">
            </div>
        </div>
        <div id="menu2" class="container tab-pane fade">
            <span>To purchase GWX with ETH, send ETH to the address below. You must send between 0.005 ETH and 5 ETH</span>
            <div class="my-4">
                <input type="text" id="ethAddress" value="QWERTYUIOPDTFGYHUJIKLSEDRFTGYHUJ" readonly>
                <button type="button" class="yellow-button btn ml-2" @click="copyAddress('ethAddress')">
                    <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                </button>
            </div>
            <span>If you're sending from a mobile device, scan the following QR code, which is the same as the address above.</span>
            <div class="mt-3 qrCode p-lg-5">
                <img src="{{ config('app.asset_url').'/images/auth/qr.png' }}">
            </div>
        </div>
        <div id="menu3" class="container tab-pane fade">
            <span>To purchase GWX with EOS, send EOS to the address below. You must send between 0.005 EOS and 5 EOS</span>
            <div class="my-3">
                <input type="text" id="eosAddress" value="QWERTYUIOPDTFGYHUJIKLSEDRFTGYHUJ" readonly>
                <button type="button" class="yellow-button btn ml-2" @click="copyAddress('eosAddress')">
                    <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                </button>
            </div>
            <span>Include this memo when buying with EOS</span>
            <div class="my-3">
                <input type="text" id="eosAddress2" value="GWX43279" readonly>
                <button type="button" class="yellow-button btn ml-2" @click="copyAddress('eosAddress2')">
                    <img src="{{ config('app.asset_url').'/images/auth/copy-icon.png' }}" class="mr-1"> COPY
                </button>
            </div>
            <span>If you're sending from a mobile device, scan the following QR code, which is the same as the address above.</span>
            <div class="mt-3 qrCode p-lg-5">
                <img src="{{ config('app.asset_url').'/images/auth/qr.png' }}">
            </div>
        </div>
    </div>
</div>
