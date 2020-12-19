<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    function list()
    {
       $data = Users:: all();
       return view('home' , ['data'=>$data]);
    }
}