<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    function index(){
        $data = User::all();
        return view('/home', compact('data'));
    }
}
