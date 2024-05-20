<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
//        return json('string', 'Hello, World! This is TaskController');
        return view('jobs');
    }
}
