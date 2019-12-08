<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content py-4 px-lg-5 px-md-5 px-4">
            <form action="/register" method="POST" id="signup_form">
                @csrf

                <div class="modal-header d-block text-center">
                    <div>
                        <img src="{{ config('app.asset_url').'/images/logo-only.png' }}">
                    </div>
                    <div class="mt-2">
                        <p class="mb-0">REGISTER FOR A</p>
                        <p class="mb-0">GAMEWORKS ACCOUNT</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="error errors text-center p-2 mb-3" style="display:none;"></div>
                    <div>
                        <small>First Name</small><br>
                        <input type="text" name="first_name" placeholder="Enter First Name" required autofocus>
                    </div>
                    <div>
                        <small>Last Name</small><br>
                        <input type="text" name="last_name" placeholder="Enter Last Name" required autofocus>
                    </div>
                    <div>
                        <small>Email</small><br>
                        <input type="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="modal-footer d-block">
                    <div class="col-12 pl-1">
                        <label class="checkbox">I agree to Terms and conditions
                            <input type="checkbox" name="terms">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-12 text-center px-0 mt-3">
                        <button type="submit" class="btn p-3">SIGNUP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
