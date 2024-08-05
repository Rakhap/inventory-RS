<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\Auth\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Laravel\Fortify\Actions\AttemptToAuthenticate;


class Login extends Component
{
    public LoginForm $loginForm;

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth', [
                'title' => 'Login'
            ]);
    }

    public function login(): void
    {
        $credentials = [
            'username' => $this->loginForm->username,
            'password' => $this->loginForm->password,
        ];

        if (Auth::attempt($credentials, $this->loginForm->remember)) {
            redirect()->intended('/');
        }

        $this->addError('login-status', 'Username atau password salah');
    }

}
