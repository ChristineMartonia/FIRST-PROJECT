<?php

use App\Http\Controllers\ProjectController;
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

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/page_1', function () {
    return "This is a page";
});

Route::get('/', function () {
    $welcome = "Welcome";
    $back = " Back to my channel";
    $hatdog = $welcome . $back;
    return $hatdog;
});


Route::get('users/{id}', function ($id) {
    $sum = 10 . $id;
    return $sum;
});

// Route::get('pn/{student}', function ($student) {
//     return $student;
// });

// Route::get('/pn/{student}/age/{age}', function ($student) {
    
// //    return $student .$age;
// return view('profile', [
//     'student' => $student;

// ]);

// });

// Route::get('/{name}/{age}', function ($name, $age) {

//     $users = [
//         'user 1',
//         'user 2',
//         'user 3'
//     ];
        
//     return view('profile', [
//         'name' => $name,
//         'age' => $age,
//         'users' => $users,
// ]);
// });


Route::get('controllers', [
    ProjectController::class,
    'index'
]);


Route::get('JokeRoute', [
    ProjectController::class,
    'joke'
]);

Route::get('JokeController', [
    ProjectController::class,
    'calculator'
]);

Route::get('StoreController', [
    ProjectController::class,
    'store'
]);