{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

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
                        <h4 class="mb-5 mt-3 fw-bold">Reset Password</h4>
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="password-container mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required autocomplete="new-password">
                                <i class="fas fa-eye toggle-password" onclick="showPassword()" id="togglePassword"></i>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="password-container mb-3">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" id="password_confirmation" required autocomplete="new-password">
                                <i class="fas fa-eye toggle-password" onclick="showPassword('password_confirmation')" id="togglePassword"></i>
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn text-black-50 fw-bold px-5" style="background-color:#F9E2D7;">Reset Password</button>
                        </form>
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
        function showPassword(inputId = 'password') {
            var passwordField = document.getElementById(inputId);
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

