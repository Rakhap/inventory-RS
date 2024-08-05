<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Attributes\Validate;
use Livewire\Form;

class GoogleLoginForm extends Form
{
    #[Validate(['email' => 'required|email:rfc,dns|ends_with:gmail.com'], message: [
        'email.required' => 'Email harus tidak boleh kosong',
        'email.ends_with' => 'Akun email harus menggunakan Gmail',
        'email.email' => 'Alamat email tidak valid'
    ])]
    public string $email = "";
}
