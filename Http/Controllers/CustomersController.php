<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        
        return view('customers.index',compact('customers'));
    }
    
    public function create()
    {
        
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create',compact('companies','customer'));
    }

    public function store()
    {
        // dd(request('name'));
        // dd(request());
        $data = request()->validate([
            'name' => 'required',
            'active' => 'required',
            'company_id' => 'required'
        ]);
        // $customers = new Customer();
        // $customers->name = request('name');
        // $customers->active = request('active');
        // $customers->save();

        // --------------------------------------------------------
        // Always use guarded (The empty array),
        // Don't do, $customer = Customer::create(request->all());
        // first validate the fields,protect them and 
        // then pass the data. Just like,
        // $customer = Customer::create($data);
        // --------------------------------------------------------
        
        Customer::create($data);

        return redirect('customers');
    }

    public function show($customer)
    {
        // have to match from the route pass. {customer} to $customer
        $customer = Customer::where('id',$customer)->firstOrFail();
        
        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));
    }   
    
    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name' => 'required',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        $customer->update($data);

        return redirect('customers/'.$customer->id);
    }   

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }


}
