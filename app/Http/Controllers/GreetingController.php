<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Greeting;

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
