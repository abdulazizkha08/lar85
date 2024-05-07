<?php

use Illuminate\Support\Facades\Route;
use App\Greeting;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

//Example 1.3.

// Определение маршрута с использованием контроллера
Route::get('/create-greeting', [GreetingController::class, 'create']);

// Обработка маршрута в контроллере
class GreetingController extends Controller
{
    public function create(Request $request)
    {
        // Создаем новый экземпляр модели Greeting
        $greeting = new Greeting();

        // Устанавливаем значение атрибута body из запроса или из статического значения
        $greeting->body = $request->input('body', 'Hello World');

        // Сохраняем модель в базе данных
        $greeting->save();

        // Возвращаем сообщение об успешном создании
        return 'Greeting created successfully!';
    }
}


Route::get('first-greeting', function(){
    return Greeting::first()->body;
});


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

//Example 1.1.
//Route::get('/', function () {
//    return 'Hello, World!';
//});

//File: routes/web.php

//Example 1.2.
//use App\Http\Controllers\WelcomeController;
//
//Route::get('/', [WelcomeController::class, 'index']);
