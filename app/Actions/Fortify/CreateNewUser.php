<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'Emp_Role' => ['max:255'],
            'Emp_Name' => ['required', 'string', 'max:255'],
            'Emp_Code' => ['required', 'string', 'max:255'],
            'Emp_Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
            
        return User::create([
            'Emp_Role' => $input['Emp_Role'],
            'Emp_Name' => $input['Emp_Name'],
            'Emp_Code' => $input['Emp_Code'],
            'Emp_Email' =>$input['Emp_Email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
