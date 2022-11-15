<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

//  Route::get('/', function () {  
//     return view('homepage');
//  });
 Route::get('/home',[FrontController::class, 'home'])->name('homepage');
 Route::get('/men',[FrontController::class, 'men'])->name('Tshirt_homme');
 Route::get('/women',[FrontController::class, 'women'])->name('Tshirt_femme');

// usage inside a laravel route
// Route::get('/test', function() {
//     $img = Image::canvas(800, 600, '#ddd');
//     $img = Image::make('images/whiteShirt.jpg');
//     $logo = Image::make('images/logos/tired.png')->resize(280,200);
//     $img->insert($logo, 'center');
    
//     // $img->ellipse(130, 130, 130, 130,  function ($draw) {
//     //     $img = Image::make('images/logos/tired.png');
//     //     $draw->background('#D6E490');
//     //     $draw->border(2,'#070E34');
//     // });
//     return $img->response('jpg');
// });
