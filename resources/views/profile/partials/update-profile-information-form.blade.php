<section>
    <header>
        <div class="card-header pb-0 px-3">
              <h6 class="mb-0">{{ __('Profile Information') }}</h6>
        </div>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-6">
                <div clas="input-group input-group-outline my-3">
                    <x-text-input placeholder="{{ __('Name') }}" id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
            </div>
            <div class="col-md-6">
                <div clas="input-group input-group-outline my-3">
                    <x-text-input placeholder="{{ __('Email')  }}" id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                </div>
            </div>
        </div>

        <div class="flex items-center gap-4 mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            {{-- @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="btn btn-primary"
                >{{ __('Saved.') }}</p>
            @endif --}}
        </div>
    </form>
</section>
