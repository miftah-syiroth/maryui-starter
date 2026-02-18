<x-layouts::auth :title="__('Login')">
    <div class="card w-96 bg-base-100 shadow-sm">
        <div class="card-body">
            <h1 class="card-title justify-center text-2xl">{{ __('Login') }}</h1>

            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-2">
                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input type="email" name="email" class="input input-bordered w-full"
                        placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autofocus
                        autocomplete="username" />
                    @error('email')
                        <span class="label text-error">{{ $message }}</span>
                    @enderror
                  </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input type="password" name="password" class="input input-bordered w-full"
                        placeholder="{{ __('Password') }}" required autocomplete="current-password" />
                    @error('password')
                        <span class="label text-error">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <label class="label">
                      <input type="checkbox" name="remember" class="checkbox checkbox-sm"
                      {{ old('remember') ? 'checked' : '' }} />
                      {{ __('Remember me') }}
                    </label>
                  </fieldset>

                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </form>

            <p
                class="text-center text-sm text-base-content/70 mt-2 flex flex-col gap-1 sm:flex-row sm:justify-center sm:gap-4">
                <a href="{{ route('password.request') }}"
                    class="link link-hover">{{ __('Forgot your password?') }}</a>
                <span class="hidden sm:inline">·</span>
                <a href="{{ route('register') }}" class="link link-hover">{{ __('Register') }}</a>
            </p>
        </div>
    </div>
</x-layouts::auth>
