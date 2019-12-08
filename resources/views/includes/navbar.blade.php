<header class="header-nav-div mx-auto pt-4 d-flex {{ Request::path() != '/' ? 'col-lg-11 px-0' : 'col-lg-10' }}" id="header">
    <nav class="navbar navbar-expand-sm transparent navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav-id" aria-controls="header-nav-id" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="header-logo d-lg-none d-md-none d-block">
            <img src="{{ config('app.asset_url').'/images/index/Logo.png' }}">
        </div>

        <div class="collapse navbar-collapse col-12 px-0 mx-auto" id="header-nav-id">
            <ul class="navbar-nav col-12 px-0">
                @if (Auth::user() == null)
                <li class="nav-item dropdown pr-lg-4">
                    <a class="nav-link dropdown-toggle" href="" id="games-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GAMES <i class="fa fa-angle-down ml-1"></i></a>
                    <div class="dropdown-menu py-0" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="{{ url('/game-page') }}">Game 1</a>
                        <a class="dropdown-item" href="{{ url('/game-page') }}">Game 2</a>
                        <a class="dropdown-item" href="{{ url('/game-page') }}">Game 3</a>
                    </div>
                </li>
                @endif

                {{-- <li class="nav-item pr-lg-4">
                    <a class="nav-link" href="#">STORE</a>
                </li> --}}
                
                <li class="nav-item {{ Request::path() != '/' ? 'mr-lg-5' : '' }}">
                    <a class="nav-link" href="https://medium.com/gameworks" target="_blank">NEWS</a>
                </li>
                <div class="header-logo col-lg-4 col-md-3 d-lg-block d-md-block d-none">
                    <a href="{{ url('/') }}"><img src="{{ config('app.asset_url').'/images/index/Logo.png' }}"></a>
                </div>
                
                @if (Auth::user() == null)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/token-swap') }}">TOKEN SWAP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-lg-4 px-md-4" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">LOGIN</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#signupModal">SIGN UP</a>
                </li> -->

                <li class="nav-item signup">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#signupModal">SIGN UP</a>
                </li>
                @else 
                <div class="searchBar">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search for games...">
                </div>

                <li class="nav-item">
                    <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                        SIGN OUT
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endif 

            </ul>
        </div>

        @include('includes.modals.login')
        @include('includes.modals.signup')
        @include('includes.modals.reset_password')
    </nav>
</header>

<script>
    new Vue({
        el: '#header',
        data: function() {
            return {
                loginError: false,
                resetPasswordError: false,
            };
        },
        methods: {
            //
        }
    });
</script>