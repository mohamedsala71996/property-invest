<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <!--bootstrap-file-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet" />
    <title>Property Invest</title>
</head>
<body>
    <section class="login-bg position-relative w-100">
        <div class="overlay"></div>
        <div class="login-section p-5">
            <div class="row mt-4 align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('img/house-2.png') }}" class="img-fluid" alt="House Image">
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <h4 class="mb-5 mt-3 fw-bold">Login</h4>
                        
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('login.user') }}">
                            @csrf
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required autofocus autocomplete="username">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="password-container mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required autocomplete="current-password">
                                <i class="fas fa-eye toggle-password" onclick="showPassword()" id="togglePassword"></i>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <button type="submit" class="btn text-black-50 fw-bold px-5" style="background-color:#F9E2D7;">Submit</button>
                        </form>
                        <div class="mt-2 d-flex gap-1 flex-wrap justify-content-center">
                            <p class="text-danger">Doesn’t have an account?</p>
                            <p class="text-dark fw-bold"><a href="{{ route('register') }}">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--script Files-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script>
        function showPassword() {
            var passwordField = document.getElementById('password');
            var togglePassword = document.getElementById('togglePassword');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                togglePassword.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                togglePassword.classList.remove('fa-eye-slash');
            }
        }
    </script>
    <!--script Files-->
</body>
</html>
