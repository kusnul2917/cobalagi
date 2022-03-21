<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Container\BindingResolutionException
use Illuminate\Support\Facades\DB;
use app\Http\UserController;

class UserController extends Controllers
{
    //
    public function index()
    {
        $user = DB::table('user')->get();
        return view('index',['user'=>$user]);
    }
}
