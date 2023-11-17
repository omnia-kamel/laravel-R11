<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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
/*
Route::get('test', function (){
    return'welcome to my first route';
});

Route::get('user/{name}/{age?}', function ($name , $age=0){
    $msg = 'your name is : ' . $name ;
    if($age > 0){
    $msg .= ' ,and your age is: '. $age ;
    }
    return $msg;

})->whereNumber('age');

Route::get('user2/{name}/{age?}', function ($name , $age=0){
    return'your name is: ' . $name  . ' , and your age is: '. $age ;
})->where(['age'=>'[0-9]+' , 'name'=>'[a-zA-Z-0-9]+']) ; 

Route::get('user3/{name}/{age?}', function ($name , $age=0){
    $msg = 'your name is : ' . $name ;
    if($age > 0){
    $msg .= ' ,and your age is: '. $age ;
    }
    return $msg;
})->whereIn('name' , ['Omnia' , 'Amany' ]);
*/


//TASK2
/*
Route::get('contact us', function (){
    return'hello you can contact us on number 11900 or <br> facebook <br> instegram <br> email'; 
});


Route::get('About', function (){
    return'welcome to our page <br> we seek to share knowledge around the world and provide the best educational service'; 
});

Route::prefix('support')->group(function(){

    Route::get('/' , function(){
        return 'support home page';
    });

    Route::get('chat/{name?} ' , function($name =0){
        if($name==0){
            return 'welcome to chat service';
        }else{
            return 'Hello ' . $name  . ' welcome to chat service ';
        }
    });

    Route::get('call' , function(){
        return 'call us on 11900';
    });

    Route::get('Ticket' , function(){
        return 'Ticket page';
    });  
});   

Route::prefix('Training')->group(function(){

    Route::get('/' , function(){
        return 'Training home page';
    });

    Route::get('HR' , function(){
        return 'HR coure';
    });

    Route::get('ICT' , function(){
        return 'ICT course';
    });

    Route::get('marketing' , function(){
        return 'marketing course';
    });  

    Route::get('logistics' , function(){
        return 'logestics course';
    });  
});  
*/

// Route::fallback(function(){
    // return redirect('/');
    //});

   // Route::get('cv' , function(){
       // return view('cv');
  //  });

 // Route::get('login' , function(){
       // return view('login');
    //});

    Route::post('receive' , function(){
        return 'Data received';
    })->name('receive');


    //Route::get('test1' ,[ExampleController::class, 'test']);

    Route::get('addCar' , function(){
        return view('addCar');
    });

  

