<section>
    <header>
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('Update Password') }}</h6>
        </div>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div clas="input-group input-group-outline my-3">
            <x-text-input placeholder="{{ __('Current Password') }}" id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div clas="input-group input-group-outline my-3">
            <x-text-input placeholder="{{ __('New Password') }}" id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div clas="input-group input-group-outline my-3">
            <x-text-input placeholder="{{ __('Confirm Password') }}" id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4 mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            {{-- @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif --}}
        </div>
    </form>
</section>
