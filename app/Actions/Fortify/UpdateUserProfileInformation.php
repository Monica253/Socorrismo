<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

use App\Rules\DNI;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'fecha_nacimiento' => ['required'],
            'direccion' => ['required'],
            'cod_postal' => ['required', 'regex:/^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/'],
            'telefono' => ['required', 'numeric', 'min:600000000', 'max:999999999'],
            'dni' => ['required', "unique:users,slug,$user->id", new DNI],
            'num_seg_social' => ['required', 'numeric', 'unique:users,slug,$user->id', 'min:100000000000', 'max:999999999999'],
            'num_cuenta' => ['required', 'regex:/^[A-Z]{2}[0-9]{2}(?:[ ]?[0-9]{4}){2}(?:[ ]?[0-9]{2})(?:[ ]?[0-9]{10})?$/'],
            'banco' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'apellidos' => $input['apellidos'],
                'email' => $input['email'],
                'fecha_nacimiento' => $input['fecha_nacimiento'],
                'direccion' => $input['direccion'],
                'cod_postal' => $input['cod_postal'],
                'telefono' => $input['telefono'],
                'dni' => $input['dni'],
                'num_seg_social' => $input['num_seg_social'],
                'num_cuenta' => $input['num_cuenta'],
                'banco' => $input['banco'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
