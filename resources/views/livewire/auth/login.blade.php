<div class="flex flex-col justify-center items-center h-dvh lg:items-start" x-data="{showPassword : false}">
    <form class="w-2/3 lg:w-3/5 2xl:w-2/5" wire:submit="login">

        <div class="mb-6">
            <h3 class="text-3xl font-semibold">Log In</h3>
            <p class="leading-relaxed text-secondary-text">Masukkan kredensial akun anda</p>
        </div>

        <div class="space-y-6">
            <div class="w-full">
                <x-label>Username</x-label>
                <x-input name="username" type="text" wire:model.blur="loginForm.username"/>
                <x-input-error for="loginForm.username"/>
            </div>

            <div class="w-full relative">
                <x-label>Password</x-label>
                <x-input x-bind:type="showPassword ? 'text' : 'password'" name="password"
                         wire:model.blur="loginForm.password"/>
                <button type="button"
                        class="text-sm text-gray-600 absolute top-[26px] rounded-r-lg right-0.5 py-[7px] bg-white px-4"
                        x-on:click="showPassword  = !showPassword">
                    <x-solar-eye-linear class="w-6 h-6" x-show="showPassword"/>
                    <x-solar-eye-closed-linear class="w-6 h-6" x-show="!showPassword"/>
                </button>
                <x-input-error for="loginForm.password"/>
            </div>
            <div>
                <x-checkbox id="remember" label="Remember me" wire:model.blur="loginForm.remember"/>
            </div>
        </div>
        <x-input-error for="login-status" class="mt-6"/>
        <x-button class="mt-10 w-full" type="submit" wire:loading.attr="disabled" wire:target="login">
            <span wire:loading.class="hidden" wire:target="login">Masuk</span>
            <span wire:loading wire:target="login">Loading ..</span>
        </x-button>
        <p class="text-secondary-text text-center text-sm whitespace-nowrap my-6">Atau masuk dengan</p>
        <x-button variant="btn-outline" type="button" class="w-full"> Akun Google</x-button>
    </form>
</div>
