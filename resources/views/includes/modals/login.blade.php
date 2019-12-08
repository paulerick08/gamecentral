<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content py-4 px-lg-5 px-md-5 px-4">
            <form action="/login" method="POST" id="signin_form">
                @csrf 

                <div class="modal-header d-block text-center">
                    <div>
                        <img src="{{ config('app.asset_url').'/images/logo-only.png' }}">
                    </div>
                    <div class="mt-2">
                        <p class="mb-0">LOGIN TO YOUR ACCOUNT</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="error errors text-center p-2 mb-3" style="display:none;"></div>

                    <div v-show="loginError" class="error text-center p-2 mb-3">
                        <p class="mb-0">Either your email or password were incorrect.</p>
                        <p class="mb-0">Would you like to <a href="javascript:void(0)" data-toggle="modal" data-target="#resetPasswordModal">reset your password?</a></p>
                    </div>
                    <div>
                        <small>Email</small><br>
                        <input type="email" name="email" placeholder="Enter email" required autofocus>
                    </div>
                    <div class="mt-3">
                        <input type="password" name="password" placeholder="Password" required>
                        <div class="text-right mt-1">
                            <a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#resetPasswordModal"><small class="yellow-text">Forgot password?</small></a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <input type="text" placeholder="Enter Google Authenticator 2FA Code">
                    </div>
                </div>
                <div class="modal-footer text-center d-block">
                    <div class="col-12 px-0">
                        <button type="submit" class="btn p-3">LOGIN</button>
                    </div>
                    <div class="col-12 px-0 mt-4">
                        <span class="gray-text">Don't have an account? </span> <a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Register now!</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
