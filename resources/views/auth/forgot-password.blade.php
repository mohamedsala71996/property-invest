{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
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
                        <h4 class="mb-5 mt-3 fw-bold">Forgot Password</h4>
                        <p class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required autofocus autocomplete="username">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn text-black-50 fw-bold px-5" style="background-color:#F9E2D7;">Email Password Reset Link</button>
                        </form>
                        <div class="mt-2 d-flex gap-1 flex-wrap justify-content-center">
                            <p class="text-dark fw-bold"><a href="{{ route('login.user') }}">Back to Login</a></p>
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
    <!--script Files-->
</body>
</html>


