<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/','home')->name('home');
Route::livewire('/product','product-index')->name('product.index');
Route::livewire('/carts','cart-index')->name('cart.index');