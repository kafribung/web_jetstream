<?php

use App\Http\Livewire\Category\Category;
use App\Http\Livewire\Inventory\Inventory;
use  App\View\Components\AppLayout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){

    // Dashboard
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    
    // Category
    Route::get('category', Category::class)->name('category');

    // Inventory
    Route::get('inventory', Inventory::class)->name('inventory');
});
