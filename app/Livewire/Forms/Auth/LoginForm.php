<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate(['username' => 'required|min:6'], message: [
        'username.required' => 'Username harus tidak boleh kosong.',
        'username.min' => 'Username minimal :min karakter.'
    ])]
    public string $username = "";

    #[Validate(['password' => 'required|min:8'], message: [
        'password.required' => 'Password harus tidak boleh kosong.',
        'password.min' => 'Password minimal :min karakter.'
    ])]
    public string $password = "";

    #[Validate(['remember' => 'nullable|boolean'], message: [])]
    public bool $remember = false;
}
