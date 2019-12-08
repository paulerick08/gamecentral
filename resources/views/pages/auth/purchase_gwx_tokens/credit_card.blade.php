<div v-if="purchaseMethod == 'Credit Card'" class="purchase mt-3">
    <ul class="nav nav-tabs text-center">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu1"><img src="{{ config('app.asset_url').'/images/auth/purchase/mastercard-visa.png' }}"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2"><img src="{{ config('app.asset_url').'/images/auth/purchase/neteller.png' }}"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3"><img src="{{ config('app.asset_url').'/images/auth/purchase/skrill.png' }}"></a>
        </li>
    </ul>
    <div class="tab-content px-4 py-5 creditCard">
        @include('pages.auth.purchase_gwx_tokens.credit_card_includes.visa')
        @include('pages.auth.purchase_gwx_tokens.credit_card_includes.neteller')
        @include('pages.auth.purchase_gwx_tokens.credit_card_includes.skrill')
    </div>
</div>
