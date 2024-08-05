@props(['title'])

<nav
    class="bg-white bg-opacity-90 backdrop-blur-sm px-8 py-4 border-b border-b-gray-200 w-[100vw] md:w-full sticky z-30 top-0"
    x-data="{userDropdown : false}">
    <div class="flex justify-between items-center">
        <div class="flex gap-4 items-center">
            <button x-on:click="sidebarMenu = !sidebarMenu" class="bg-secondary/10 rounded-lg p-1">
                <x-solar-list-bold class="w-6 h-6 text-dark"/>
            </button>
            <x-page-title>{{$title}}</x-page-title>
        </div>
        <div class="flex justify-end items-center gap-8">
            <div class="relative">
                <button x-on:click="userDropdown = !userDropdown" class="flex gap-2.5 items-center">
                    <span class="rounded-full bg-secondary/10 p-1 block">
                        <x-solar-user-linear class="w-6 h-6 text-gray-600 "/>
                    </span>
                    <span class="capitalize">{{auth()->user()->username}}</span>
                </button>
                <div x-show="userDropdown" class="fixed p-4 bg-white top-[4.9em] shadow rounded-xl w-40 right-8">
                    <ul class="space-y-1">
                        <li class="p-2 hover:bg-light rounded-lg">
                            <a href="/user/account" wire:navigate
                               class="flex gap-3 font-medium items-center text-secondary-text hover:text-primary-text text-sm">
                                <x-solar-user-broken class="w-6 h-6"/>
                                <span>Akun</span>
                            </a>
                        </li>
                        <li class="p-2 hover:bg-light rounded-lg">
                            <livewire:auth.logout/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
