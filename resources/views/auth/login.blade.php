<x-guest-layout>


    <div class="page-header align-items-start min-vh-100" style="background-image: url('');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Ingrese</h4>
                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="text-start">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-text-input placeholder="{{ __('Email') }}" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">

                        <x-text-input placeholder="{{ __('Password') }}" id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <x-primary-button style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2">
                        {{ __('Log in') }}
                    </x-primary-button>
                    
                    <div class="mt-4 text-center">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


</x-guest-layout>
