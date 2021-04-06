<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="apellidos" value="{{ __('Lastname') }}" />
            <x-jet-input id="apellidos" type="text" class="mt-1 block w-full" wire:model.defer="state.apellidos" autocomplete="apellidos" />
            <x-jet-input-error for="apellidos" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="fecha_nacimiento" value="{{ __('Birth date') }}" />
            <x-jet-input id="fecha_nacimiento" type="date" class="mt-1 block w-full" wire:model.defer="state.fecha_nacimiento" autocomplete="fecha_nacimiento" />
            <x-jet-input-error for="fecha_nacimiento" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="direccion" value="{{ __('Address') }}" />
            <x-jet-input id="direccion" type="text" class="mt-1 block w-full" wire:model.defer="state.direccion" autocomplete="direccion" />
            <x-jet-input-error for="direccion" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cod_postal" value="{{ __('Postal code') }}" />
            <x-jet-input id="cod_postal" type="text" class="mt-1 block w-full" wire:model.defer="state.cod_postal" autocomplete="cod_postal" />
            <x-jet-input-error for="cod_postal" class="mt-2" />
            <p class="text-xs text-gray-500">{{ __('It has to be a Spanish Postal Code (from 01000 to 52999).') }}</p>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telefono" value="{{ __('Phone') }}" />
            <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="state.telefono" autocomplete="telefono" />
            <x-jet-input-error for="telefono" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="dni" value="{{ __('Id Card') }}" />
            <x-jet-input id="dni" type="text" class="mt-1 block w-full" wire:model.defer="state.dni" autocomplete="dni" />
            <x-jet-input-error for="dni" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="num_seg_social" value="{{ __('Social Security Number') }}" />
            <x-jet-input id="num_seg_social" type="text" class="mt-1 block w-full" wire:model.defer="state.num_seg_social" autocomplete="num_seg_social" />
            <x-jet-input-error for="num_seg_social" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="num_cuenta" value="{{ __('Account Number') }}" />
            <x-jet-input id="num_cuenta" type="text" class="mt-1 block w-full" wire:model.defer="state.num_cuenta" autocomplete="num_cuenta" />
            <x-jet-input-error for="num_cuenta" class="mt-2" />
            <p class="text-xs text-gray-500">{{ __('Format:') }} ES00 0000 0000 00 0000000000 / ES0000000000000000000000</p>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="banco" value="{{ __('Bank') }}" />
            <x-jet-input id="banco" type="text" class="mt-1 block w-full" wire:model.defer="state.banco" autocomplete="banco" />
            <x-jet-input-error for="banco" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
