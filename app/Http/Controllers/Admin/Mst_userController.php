<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mst_user;
use App\Task;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Mst_userController extends Controller
{
    function index(){
        $users = DB::table('mst_users')->get();
        return view('admin/users')->with('users',$users);
    }
}
