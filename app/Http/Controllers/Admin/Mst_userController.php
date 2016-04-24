<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mst_user;
use App\Task;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Mst_userController extends Controller
{
    function index(){
        $tasks = Task::where('user_id', '1')->get();
        var_dump($tasks[0]);exit;
    }
}
