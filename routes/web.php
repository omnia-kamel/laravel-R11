<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlacesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('about', function () {
//    return 'About page';
//});
//
//Route::get('contact-us', function () {
//    return 'Contact US page';
//});
//
//Route::prefix('support')->group(function () {
//   Route::get('/', function () {
//       return 'Support Home page';
//   });
//
//   Route::get('chat', function () {
//      return 'Chat page';
//   });
//
//    Route::get('call', function () {
//        return 'Call page';
//    });
//
//    Route::get('ticket', function () {
//        return 'Ticket page';
//    });
//});
//
//Route::prefix('training')->group(function () {
//    Route::get('/', function () {
//        return 'Training Home page';
//    });
//
//    Route::get('ict', function () {
//        return 'ICT page';
//    });
//
//    Route::get('hr', function () {
//        return 'HR page';
//    });
//
//    Route::get('marketing', function () {
//        return 'Marketing page';
//    });
//
//    Route::get('logistics', function () {
//        return 'Logistics page';
//    });
//});

//Route::fallback(function () {
//   return redirect('/');
//});


Route::get('cv', function () {
   return view('cv');
});

Route::get('login', function () {
    return view('login');
});

Route::post('receive', function () {
    return "data received";
})->name('receive');

Route::get('test', [ExampleController::class, 'test']);

//Route::get('add-car', [CarController::class, 'add_car']);
//Route::post('car-added', [CarController::class, 'added'])->name('car-added');
//
//Route::get('car-added', fn() => redirect('add-car'));

//Car Info
Route::get('add-car', [CarsController::class, 'create']);
Route::post('car-added', [CarsController::class, 'store'])->name('car-added');
Route::get('car-index', [CarsController::class, 'index']);
Route::get('edit-car/{id}', [CarsController::class, 'edit']);
Route::get('show-car/{id}', [CarsController::class, 'show'])->name('show-car');
Route::put('update-car/{id}', [CarsController::class, 'update'])->name('update-car');
Route::get('softDelete-car/{id}', [CarsController::class, 'destroy']);
Route::get('trashed-car', [CarsController::class, 'trashed']);
Route::get('restore-car/{id}', [CarsController::class, 'restore']);
Route::get('forcedelete-car/{id}', [CarsController::class, 'forcedelete']);

//News Info
Route::get('create-news', [NewsController::class, 'create']);
Route::post('store-news', [NewsController::class, 'store'])->name('store-news');
Route::get('edit-news/{id}', [NewsController::class, 'edit']);
Route::get('show-news/{id}', [NewsController::class, 'show'])->name('show-news');
Route::put('update-news/{id}', [NewsController::class, 'update'])->name('update-news');
Route::get('news-index', [NewsController::class, 'index']);
Route::get('softdelete-news/{id}', [NewsController::class, 'destroy']);
Route::get('trashed-news', [NewsController::class, 'trashed']);
Route::get('restore-news/{id}', [NewsController::class, 'restore']);
Route::get('forcedelete-news/{id}', [NewsController::class, 'forcedelete']);


Route::get('show_Upload', [ExampleController::class, 'showUpload']);
Route::post('upload', [ExampleController::class, 'upload'])->name('upload');


//Route::get('login',[ExampleController::class, 'login']);
//Route::get('place',[ExampleController::class, 'place']);
//Route::get('blog',[ExampleController::class, 'blog']);
//Route::get('blog1',[ExampleController::class, 'blog1']);


Route::get('place-index',[PlacesController::class, 'index']);
Route::get('add-place',[PlacesController::class, 'create']);
Route::post('store-place',[PlacesController::class, 'store'])->name('storePlace');
Route::get('softDelete-place/{id}',[PlacesController::class, 'destroy']);
Route::get('trashed-places', [PlacesController::class, 'trashed']);
Route::get('restore-place/{id}', [PlacesController::class, 'restore']);
Route::get('forcedelete-place/{id}', [PlacesController::class, 'forcedelete']);