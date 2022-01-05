<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
    
    public function list() 
    {   
        $activeTeachers = Teacher::where('active',1)->get();
        $inactiveTeachers = Teacher::where('active',0)->get();
        $schools = School::all();

        return view('institute.teachers',compact('activeTeachers','inactiveTeachers','schools'));
    }

    public function store()
    {
        // dd(request());
        // dd(request()->name);

        $data = request()->validate([
            'name' => 'required',
            'active' => 'required',
            'school_id' => 'required'
        ]);

        $teachers = new Teacher();
        $teachers->name = request('name');
        $teachers->active = request('active');
        $teachers->school_id = request('school_id');
        $teachers->save();

        return back();
    }
    
}
