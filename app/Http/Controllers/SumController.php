<?php

namespace App\Http\Controllers;

use App\Sum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SumController extends Controller
{

    public function index()
    {
        $sums = Sum::all();

        //dd($sums->a);

        return view('sum.index',compact('sums'));
    }

    public function new()
    {
        return view('sum.new');
    }

    public function create()
    {
        return view('sum.create');
    }

    public function store(Sum $sums)
    {
        DB::table('sums')
        ->where('id', '2')
        ->sum(DB::raw('a + b'));
        
        $balance = DB::table('sums')->where('user_id' ,'=', $id)->sum('balance');
        

        request()->validate([
            'a' => 'required',
            'b' => 'required',
            'sum' => 'required',
        ]);

        $sums->create([
            'a' => request('a'), 
            'b' => request('b'), 
            'sum' => request('sum'), 
        ]);

        return redirect('/sum');
       
    }

    public function show(Sum $sum)
    {
        
    }

    public function edit(Sum $sum)
    {
        //
    }

    public function update(Request $request, Sum $sum)
    {
        //
    }


    public function destroy(Sum $sum)
    {
        //
    }
}
