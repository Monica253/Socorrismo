<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <!--<div class="mt-4">
                <x-jet-label for="apellidos" value="{{ __('Lastname') }}" />
                <x-jet-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('direccion')" required />
            </div>-->

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
            </div>

            <!--<div class="mt-4">
                <x-jet-label for="fecha_nacimiento" value="{{ __('Birth Date') }}" />
                <x-jet-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="direccion" value="{{ __('Address') }}" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="cod_postal" value="{{ __('Postal Code') }}" />
                <x-jet-input id="cod_postal" class="block mt-1 w-full" type="number" name="cod_postal" :value="old('cod_postal')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="telefono" value="{{ __('Phone') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="dni" value="{{ __('Id Card') }}" />
                <x-jet-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="num_seg_social" value="{{ __('Social Security Number') }}" />
                <x-jet-input id="num_seg_social" class="block mt-1 w-full" type="text" name="num_seg_social" :value="old('num_seg_social')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="num_cuenta" value="{{ __('Account Number') }}" />
                <x-jet-input id="num_cuenta" class="block mt-1 w-full" type="text" name="num_cuenta" :value="old('num_cuenta')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="banco" value="{{ __('Bank') }}" />
                <x-jet-input id="banco" class="block mt-1 w-full" type="text" name="banco" :value="old('banco')" required />
            </div>-->

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
