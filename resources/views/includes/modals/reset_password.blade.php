<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content py-4 px-lg-5 px-md-5 px-4">
            <form action="/password/reset" method="POST" id="forgot_form">
                @csrf 

                <div class="modal-header d-block text-center">
                    <div>
                        <img src="{{ config('app.asset_url').'/images/logo-only.png' }}">
                    </div>
                    <div class="mt-2">
                        <p class="mb-0">RESET YOUR PASSWORD</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="error errors text-center p-2 mb-3" style="display:none;"></div>

                    <div v-show="resetPasswordError" class="error text-center p-2 mb-3">
                        <p class="mb-0">That email address is not currently registered here.</p>
                        <p class="mb-0">Would you like to <a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">sign up?</a></p>
                    </div>
                    <div>
                        <small>Email</small><br>
                        <input type="email" name="email" placeholder="Enter email" required autofocus>
                    </div>
                </div>
                <div class="modal-footer text-center mt-4">
                    <button type="submit" class="btn p-3">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
