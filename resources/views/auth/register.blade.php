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
                        <h4 class="mb-5 mt-3 fw-bold">Sign Up</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" value="{{ old('name') }}" required autofocus autocomplete="name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input type="email" name="email" class="form-control mb-3" placeholder="Email" value="{{ old('email') }}" required autocomplete="username">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="password-container mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required autocomplete="new-password">
                                <i class="fas fa-eye toggle-password" onclick="showPassword()" id="togglePassword"></i>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Confirm Password" required autocomplete="new-password">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <p class="text-start mb-3">Why do you need to join our website?</p>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" name="website_interests[]" type="checkbox" value="new-launches" id="new-launches">
                                    <label class="form-check-label" for="new-launches">
                                        Interest in new launches
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="website_interests[]" type="checkbox" value="buy" id="buy">
                                    <label class="form-check-label" for="buy">
                                        Buy property
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" name="website_interests[]" type="checkbox" value="sell" id="sell">
                                    <label class="form-check-label" for="sell">
                                        Sell property
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="website_interests[]" type="checkbox" value="apartment" id="apartment">
                                    <label class="form-check-label" for="apartment">
                                        Interior decories in an apartment
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn text-black-50 mt-3 fw-bold px-5" style="background-color:#F9E2D7;">Submit</button>
                        </form>
                        <div class="mt-2 d-flex gap-1 flex-wrap justify-content-center">
                            <p class="text-danger">Already have an account?</p>
                            <p class="text-dark fw-bold"><a href="{{ route('login') }}">Login</a></p>
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
