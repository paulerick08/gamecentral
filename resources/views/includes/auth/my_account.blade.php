<div class="my-account-sidebar px-4 pb-3" id="myAccount">
    <button type="button" class="close" @click="closeMyAccount">&times;</button>
    <div class="mt-4 px-2">
        <div class="d-flex align-items-center">
            <img src="{{ config('app.asset_url').'/images/auth/my-account-icon.png' }}" class="mr-2">
            <h6 class="white-text mb-0">MY ACCOUNT</h6>
        </div>
        <div class="py-3">
            <div class="mb-2">
                <a href="{{ url('/personal-details') }}">Personal details</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/my-wallet') }}">Deposit and Withdrawal</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/purchase-gwx-tokens') }}">Purchase GWX Tokens</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/currency-exchange') }}">Convert</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/token-swap') }}">Token Swap</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/history') }}">Transaction History</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/playing-history') }}">Playing History</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/my-credit-cards') }}">My Credit Cards</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/add-credit-card') }}">Add Credit Card</a>
            </div>
        </div>
    </div>
    <div class="px-2">
        <div class="d-flex align-items-center">
            <img src="{{ config('app.asset_url').'/images/auth/settings-icon.png' }}" class="mr-2">
            <h6 class="white-text mb-0">SETTINGS</h6>
        </div>
        <div class="py-3">
            <div class="mb-2">
                <a href="{{ url('/change-password') }}">Change Password</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('two-factor-authentication') }}">2FA Authentication</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('/preferences') }}">Preferences</a>
            </div>
            <button class="incomplete text-center mt-3" @click="goToKYC">COMPLETE KYC</button>
        </div>
    </div>
</div>

<script>
    new Vue({
        el: '#myAccount',
        data: function() {
            return {
                //
            };
        },
        methods: {
            closeMyAccount: function() {
                $(".my-account-sidebar").removeClass("d-block");
                $("#rightContent").removeClass("disabledContent");
            },
            goToKYC: function() {
                window.location.href = '/kyc';
            }
        }
    });
</script>
