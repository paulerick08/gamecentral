<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900' rel='stylesheet'>
        <link href="{{ config('app.asset_url').'/css/global.css' }}" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        {{-- Scripts Vue and axios --}}
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

        <script>
            axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
            axios.defaults.headers.common['Authorization'] = "{{ Auth::check() ?  'Bearer ' . Auth::user()->api_token : null }}";

            var BASE_URL="{{ url('/') }}";
            var CONSTANT = {
                "notification":"{{ config('variables.contant.save_notification_path') }}"
            }
        </script>

        @yield('extra_css')
    </head>

    <body>
        @include('includes.navbar')

        <div id="app">
            @yield('content')
        </div>

        @yield('extra_scripts')

        @include('includes.footer')

        @if (Auth::user() == null)
        <script>
            // login form
            $('#signin_form').on('submit', function (e) {
                e.preventDefault()
                let submitBtn = $(this).find('button[type=submit]');
                let errorMsg =  $(this).find('.errors');

                submitBtn.attr('disabled', 'disabled')
                errorMsg.hide()

                $.ajax({
                    url: $(this).attr('action'),
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                    },
                    method : 'POST',
                    data : {
                        email: $(this).find('input[name=email]').val(),
                        password: $(this).find('input[name=password]').val(),
                    },
                    success: function (data) {
                        submitBtn.removeAttr('disabled')
                        window.location.reload();
                    },
                    error: function (error) {
                        let errors = error.responseText ? JSON.parse(error.responseText) : '';
                        
                        if (errors) {
                            errorMsg.html(`<p class="mb-0">Either your email or password were incorrect.</p>`)
                            errorMsg.show()
                        }

                        submitBtn.removeAttr('disabled')
                    }
                })
            })

            // registration
            $('#signup_form').on('submit', function (e) {
                e.preventDefault()
                let submitBtn = $(this).find('button[type=submit]');
                let errorMsg =  $(this).find('.errors');

                submitBtn.attr('disabled', 'disabled')
                errorMsg.hide()

                $.ajax({
                    url: $(this).attr('action'),
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                    },
                    method : 'POST',
                    data : {
                        first_name: $(this).find('input[name=first_name]').val(),
                        last_name: $(this).find('input[name=last_name]').val(),
                        email: $(this).find('input[name=email]').val(),
                        password: $(this).find('input[name=password]').val(),
                        password_confirmation: $(this).find('input[name=password_confirmation]').val(),
                        terms: $(this).find('input[name=terms]').prop('checked') ? 'true' : ''
                    },
                    success: function (data) {
                        submitBtn.removeAttr('disabled')
                        window.location.reload();
                    },
                    error: function (error) {
                        let response = error.responseText ? JSON.parse(error.responseText) : '';
                        let errors = ''

                        if (response) {
                            Object.entries(res.errors).map(error => {
                                errors += error[1] ? `<p class="mb-0">${error[1]}</p>` : ''
                            })

                            errorMsg.html(errors)
                            errorMsg.show()
                        }

                        submitBtn.removeAttr('disabled')
                    }
                })
            })

            // forgot password
            $('#forgot_form').on('submit', function (e) {
                e.preventDefault()
                
                let submitBtn = $(this).find('button[type=submit]');
                let errorMsg =  $(this).find('.errors');

                submitBtn.attr('disabled', 'disabled')
                errorMsg.hide()

                $.ajax({
                    url: $(this).attr('action'),
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                    },
                    method : 'POST',
                    data : {
                        email: $(this).find('input[name=email]').val(),
                    },
                    success: function (data) {
                        submitBtn.removeAttr('disabled')
                        window.location.reload();
                    },
                    error: function (error) {
                        let errors = error.responseText ? JSON.parse(error.responseText) : '';
                            debugger
                        if (errors) {
                            errorMsg.html(`<p class="mb-0">Invalid email address.</p>`)
                            errorMsg.show()
                        }

                        submitBtn.removeAttr('disabled')
                    }
                })
            })
        </script>
        @endif 
    </body>
</html>
