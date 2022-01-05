<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MessController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('mess.member',compact('members'));
    }
}
