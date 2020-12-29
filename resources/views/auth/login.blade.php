<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row">
            <div class="col-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" >Email address</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus  class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="remember_me" class="form-check-input" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif`
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
