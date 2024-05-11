<?php

use App\Models\Greeting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);  //!!!



//Example 1.3.

//Route::get('create-greeting', function () {
//
//        $greeting = new Greeting;
//
//        // Устанавливаем значение атрибута body из запроса или из статического значения
//        $greeting->body = 'Hello, World!';
//
//
//    // Сохраняем модель в базе данных
//        $greeting->save();
//
//        // Возвращаем сообщение об успешном создании
//        return 'Greeting created successfully!';
//});
//
//Route::get('first-greeting', function(){
//    return Greeting::first()->body;
//});
//
//Route::get('delete-greeting/{id}', function ($id) {
//    // Находим модель Greeting по идентификатору
//    $greeting = Greeting::find($id);
//
//    // Проверяем, существует ли модель
//    if ($greeting) {
//        // Если модель существует, вызываем метод delete() для удаления записи из базы данных
//        $greeting->delete();
//
//        // Возвращаем сообщение об успешном удалении
//        return 'Greeting deleted successfully!';
//    } else {
//        // Если модель не найдена, возвращаем сообщение об ошибке
//        return 'Greeting not found!';
//    }
//});


//Example 1.2.
//use App\Http\Controllers\WelcomeController;
//
//Route::get('/', [WelcomeController::class, 'index']);


//Example 1.1.
//Route::get('/', function () {
//    return 'Hello, World!';
//});

//File: routes/web.php
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

//Route::get('/', function () {
//    return view('welcome');
//});
