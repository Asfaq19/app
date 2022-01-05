<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reader;

class BookController extends Controller
{
    public function index()
    {
        $readers = Reader::all();
    
        return view('book.index',compact('readers'));
    }

    public function create()
    {
        $reader = new Reader();
        return view('book.create',compact('reader'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required'
        ]);

        Reader::create($data);

        return redirect('readers');
    }

    public function show($reader)
    {
        // dd($reader);
        $reader = Reader::where('id',$reader)->firstOrFail();
        return view('book.show',compact('reader'));
    }

    public function edit(Reader $reader)
    {
        // dd($reader);
        return view('book.edit',compact('reader'));
    }

    public function update(Reader $reader)
    {
        $data = request()->validate([
            'name' => 'required'
        ]);

        $reader->update($data);

        return redirect('readers/'.$reader->id);
    }

    public function destroy(Reader $reader)
    {
        $reader->delete();

        return redirect('readers');
    }

}
