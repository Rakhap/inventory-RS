<?php

use App\Livewire\Item\CreateItem;
use App\Livewire\Item\EditItem;
use App\Livewire\Item\Export;
use App\Livewire\Item\TableItem;
use App\Livewire\Room\Room;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\User\Account;
use App\Livewire\TestingPage;
use App\Livewire\Item\Item;
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', Login::class)->name('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/user/account', account::class)->name('profile');

    Route::get('/inventory', Item::class)->name('inventory');
    Route::get('/inventory/form', CreateItem::class)->name('create-item');

    Route::get('/inventory/{id}', EditItem::class)->name('item.edit');
    Route::get('/room',Room::class)->name('room');
});
// Route::delete('/inventory', EditItem::class)->name('item.delete');
// Route::get('/export', Export::class)->name('export');
// Route::post('/inventory', Item::class)->name('item');
// Route::get('/inventory/form/{id}', EditItem::class)->name('edit-item');

