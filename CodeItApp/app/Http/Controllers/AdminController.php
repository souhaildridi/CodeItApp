<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Http\Controllers\UserController;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }  
    
    public function users()
    {
        return view('users');
    } 
    //
}
