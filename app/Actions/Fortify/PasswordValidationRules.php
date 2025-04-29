<?php

namespace App\Actions\Fortify;


use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            Password::min(8)  // Mínimo 12 caracteres
                ->mixedCase()  // Al menos una mayúscula y una minúscula
                ->numbers()    // Al menos un número
                ->symbols()   // Al menos un símbolo especial
                ->uncompromised(), // Verifica contra contraseñas comprometidas
            'confirmed'
        ];
        // return ['required', 'string', Password::default(), 'confirmed'];
    }
}
