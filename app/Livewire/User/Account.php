<?php

namespace App\Livewire\User;

use App\Livewire\Forms\Auth\GoogleLoginForm;
use Livewire\Component;

class Account extends Component
{
    public GoogleLoginForm $googleLoginForm;

    public function rendering()
    {
        if (!$this->googleLoginForm->email) {
            $this->addError('login-gmail', 'Anda belum melengkapi alamat email,
             abaikan jika tidak ingin mengaktifkan');
        }
    }

    public function render()
    {
        return view('livewire.user.account')
            ->layout('layouts.app', [
                'title' => 'Akun'
            ]);
    }
}
