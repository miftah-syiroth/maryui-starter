<x-layouts::auth :title="__('Register')">
    <div class="card w-96 bg-base-100 shadow-sm">
        <div class="card-body">
            <h1 class="card-title justify-center text-2xl">{{ __('Register') }}</h1>

            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-2">
                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Name') }}</legend>
                    <input type="text" name="name" class="input input-bordered w-full"
                        placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus
                        autocomplete="name" />
                    @error('name')
                        <span class="label text-error">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input type="email" name="email" class="input input-bordered w-full"
                        placeholder="{{ __('Email') }}" value="{{ old('email') }}" required
                        autocomplete="username" />
                    @error('email')
                        <span class="label text-error">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input type="password" name="password" class="input input-bordered w-full"
                        placeholder="{{ __('Password') }}" required autocomplete="new-password" />
                    @error('password')
                        <span class="label text-error">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
                    <input type="password" name="password_confirmation" class="input input-bordered w-full"
                        placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" />
                    @error('password_confirmation')
                        <span class="label text-error">{{ $message }}</span>
                    @enderror
                </fieldset>

                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </form>

            <p class="text-center text-sm text-base-content/70 mt-2">
                {{ __('Already have an account?') }}
                <a href="{{ route('login') }}" class="link link-hover">{{ __('Login') }}</a>
            </p>
        </div>
    </div>
</x-layouts::auth>
