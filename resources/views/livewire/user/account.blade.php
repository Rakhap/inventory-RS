<div class="space-y-8">
    <x-section>
        <div class="grid grid-cols-1 lg:grid-cols-2 my-6 gap-6">
            <div class="flex gap-4 items-start">
                <div class="bg-secondary/40 p-1.5 w-max rounded-full mb-3">
                    <x-solar-letter-linear class="w-12 h-12 text-white bg-primary p-2 rounded-full"/>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Login Dengan Akun Google</h3>
                    <p class="text-secondary-text">Aktifkan login dengan akun Google, pastikan akun Google anda
                        aktif.</p>
                </div>
            </div>
            <div class="col-span-1 w-full  mx-auto space-y-4">
                <div class="w-full">
                    <x-label>Email</x-label>
                    <x-input name="email" type="email" wire:model.blur="googleLoginForm.email"/>
                    <x-input-error for="googleLoginForm.email"/>
                </div>
                <x-input-error for="login-gmail" class="mt-6"/>
                <x-button class="ms-auto">Aktifkan</x-button>
            </div>
        </div>
    </x-section>

    <x-section>
        <div class="grid grid-cols-1 lg:grid-cols-2 my-6 gap-6">
            <div class="flex gap-4 items-start">
                <div class="bg-secondary/40 p-1.5 w-max rounded-full mb-3">
                    <x-solar-shield-keyhole-outline class="w-12 h-12 text-white bg-primary p-2 rounded-full"/>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Update Password</h3>
                    <p class="text-secondary-text">Pastikan kata sandi anda menggunakan huruf kapital, huruf kecil,
                        angka atau karakter agar akun
                        anda tetap aman.</p>
                </div>
            </div>
            <div class="col-span-1 w-full  mx-auto space-y-4">
                <div class="w-full">
                    <x-label>Password saat ini</x-label>
                    <x-input name="username" type="text" wire:model.blur="loginForm.username"/>
                    <x-input-error for="loginForm.username"/>
                </div>
                <div class="w-full">
                    <x-label>Password baru</x-label>
                    <x-input name="username" type="text" wire:model.blur="loginForm.username"/>
                    <x-input-error for="loginForm.username"/>
                </div>
                <div class="w-full">
                    <x-label>Konfirmasi password baru</x-label>
                    <x-input name="username" type="text" wire:model.blur="loginForm.username"/>
                    <x-input-error for="loginForm.username"/>
                </div>
                <x-button class="ms-auto">Simpan</x-button>
            </div>
        </div>
    </x-section>
</div>
