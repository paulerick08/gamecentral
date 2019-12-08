@include('includes.auth.my_account')
<div class="sidebar col-lg-3 col-md-4 col-12 px-0" id="sidebar">
    <div class="sidebarDiv userInfo">
        <div class="diamond-border"></div>
        <div class="diamond">
            <div class="userImage"></div>
        </div>
        <button class="settingsButton" @click="openMyAccount">
            <img src="{{ config('app.asset_url').'/images/auth/settings-icon.png' }}">
        </button>
        <div class="info px-3 pb-3">
            <div class="text-center userName mb-3">
                <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            </div>
            <div class="balance align-items-center d-flex p-2">
                <img src="{{ config('app.asset_url').'/images/logo-only.png' }}" class="gwxLogo">
                <span class="ml-2">13,364.2235</span>
                <button class="float-right"><i class="fas fa-plus"></i></button>
            </div>
            <div class="balance align-items-center d-flex p-2 mt-2">
                <img src="{{ config('app.asset_url').'/images/index/eos-logo.png' }}" class="eosLogo">
                <span class="ml-2">0.0000</span>
                <button class="float-right"><i class="fas fa-plus"></i></button>
            </div>
            <div class="balance align-items-center d-flex p-2 mt-2">
                <span class="ml-2 mr-1">&dollar;</span>
                <span class="ml-2">134.25</span>
                <button class="float-right"><i class="fas fa-plus"></i></button>
            </div>
            <div class="balance align-items-center d-flex p-2 mt-2">
                <span class="ml-2 mr-1">&yen;</span>
                <span class="ml-2">0.00</span>
                <button class="float-right"><i class="fas fa-plus"></i></button>
            </div>
            <div class="totalValue text-center my-3">
                <span>TOTAL ESTIMATED VALUE</span><br>
                <h4 class="mt-1">&dollar;132,545.05</h4>
            </div>
        </div>
    </div>

    <h4 class="goldText my-3">GAMES</h4>

    <div class="gamesDiv">
        <button class="text-left p-2 align-items-center" type="button" data-toggle="collapse" data-target="#gamesOfChance" aria-expanded="false" aria-controls="gamesOfChance"><img src="{{ config('app.asset_url').'/images/auth/goc-icon.png' }}" class="mr-1"> GAMES OF CHANCES <i class="fa fa-angle-down float-right mt-2 mr-2"></i></button>
        <div class="collapse" id="gamesOfChance">
            <div class="card card-body p-2">
                <a href="{{ url('game-page') }}" v-for="index in 5" class="py-1 px-2">Game name</a>
            </div>
        </div>

        <button class="text-left p-2 mt-1" type="button" data-toggle="collapse" data-target="#gamesOfSkill" aria-expanded="false" aria-controls="gamesOfSkill"><img src="{{ config('app.asset_url').'/images/auth/gos-icon.png' }}" class="mr-1"> GAMES OF SKILLS <i class="fa fa-angle-down float-right mt-2 mr-2"></i></button>
        <div class="collapse" id="gamesOfSkill">
            <div class="card card-body p-2">
                <a href="{{ url('game-page') }}" v-for="index in 5" class="py-1 px-2">Game name</a>
            </div>
        </div>

        <button class="text-left p-2 mt-1" type="button" data-toggle="collapse" data-target="#tableGames" aria-expanded="false" aria-controls="tableGames"><img src="{{ config('app.asset_url').'/images/auth/tg-icon.png' }}" class="mr-1"> TABLE GAMES <i class="fa fa-angle-down float-right mt-2 mr-2"></i></button>
        <div class="collapse" id="tableGames">
            <div class="card card-body p-2">
                <a href="{{ url('game-page') }}" v-for="index in 5" class="py-1 px-2">Game name</a>
            </div>
        </div>
    </div>

    <h4 class="goldText my-3">RAFFLES</h4>

    <div class="rafflesDiv">
        <a href="{{ url('raffle') }}">
            <div class="text-left p-2 align-items-center">
                <img src="{{ config('app.asset_url').'/images/logo-only.png' }}" class="gwx mr-1"> GWX RAFFLE
            </div>
        </a>
        <a href="{{ url('raffle') }}">
            <div class="text-left p-2 align-items-center mt-1">
                <img src="{{ config('app.asset_url').'/images/footer/eos-footer.png' }}" class="eos"> EOS RAFFLE
            </div>
        </a>
    </div>

    <h6 class="mt-3 signOut d-lg-block d-md-block d-none">
        <a href="#"><i class="fas fa-power-off ml-2 mr-1"></i> Sign out </a>
    </h6>

    <script>
        new Vue({
            el: '#sidebar',
            data: function() {
                return {
                    //
                };
            },
            methods: {
                openMyAccount: function() {
                    $(".my-account-sidebar").addClass("d-block");
                    $("#rightContent").addClass("disabledContent");
                }
            }
        });
    </script>
</div>