<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class My_AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('RegisteredName_MyAdmin');
    }

    public function index()
    {
        // return "This is from your controller [Middleware + Controller]";
        return view('my_admin');
    }
}
