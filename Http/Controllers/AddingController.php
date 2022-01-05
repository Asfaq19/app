<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddingController extends Controller
{
    public function index()
    {
        
        $data = DB::select('SELECT * FROM adding');

        return view('add.index',compact('data'));
        
    }

    public function create()
    {
        return view('add.create');   
    }

    public function store(Request $request){
        
        $number_one = $request->a;
        $number_two = $request->b;
        $number_three = $request->c;
        $number_four = $request->d;
        $number_five = $request->e;
        $number_six = $request->f;
        $sum = $number_one + $number_two + $number_three + $number_four + $number_five
                + $number_six;

        
        DB::table('adding')->insert(
        [
            'a' => $number_one,'b' =>$number_two,
            'c' => $number_three,'d' =>$number_four,
            'e' => $number_five,'f' =>$number_six,
            'sum' =>$sum
        ]);

        return redirect('add');   
    }

    public function destroy($id) 
    {
        
        DB::delete('delete from adding where id = ?',[$id]);

        return redirect('add');   
    
    }

}