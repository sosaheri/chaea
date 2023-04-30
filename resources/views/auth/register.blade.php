<x-guest-layout>

          <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('uploads/register.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Cree su cuenta</h4>
                  <p class="mb-0">Rellene este sencillo formulario para solicitar sus pedidos</p>
                </div>
                
                <div class="card-body">
                @foreach ($errors->all() as $error)
                  <span class="text-danger">{{ $error }}<br/></span>
                @endforeach



                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-text-input id="rif" class="block mt-1 w-full" type="text" name="rif" :value="old('rif')" placeholder="{{ __('RIF') }}" required autofocus autocomplete="rif" />
                        <x-input-error :messages="$errors->get('rif')" class="mt-2" />
                    </div>

                    <!-- Name -->
                    <div class="mt-4">
                        <x-text-input placeholder="{{ __('Name') }}" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-text-input placeholder="{{ __('Email') }}" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <select name="salesmans[]" class="js-example-basic-single select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" multiple="multiple">
                                        @foreach ($salesmans as $seller) 
                                          <option value="{{ $seller->id }}">{{ $seller->user->name }}</option>
                                        @endforeach
                        </select>
                        </div>

                    <!-- Password -->
                    <div class="mt-4">

                        <x-text-input placeholder="{{ __('Password') }}" id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-text-input placeholder="{{ __('Confirm Password') }}" id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        
                        <x-primary-button style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2">
                            {{ __('Crear cuenta') }}
                        </x-primary-button>
                    </div>
                </form>

                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Ya tiene una cuenta?
                    <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Ingresar</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

</x-guest-layout>

<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2({
      placeholder: "Selecciona tus vendedores",
      multiple: true,
      allowClear: true
    });
});
</script>
