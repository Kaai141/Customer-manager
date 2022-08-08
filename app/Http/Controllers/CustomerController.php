<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

// use Hash;
// use DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('customer.list', compact('customer'));
        
    }

    public function create()
    {
        return view('customers.create');       
    }

    /**
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:customer|max:190',
            'address' => 'required|max:190',
            'type' => 'required|min:8',
            'gender' => 'required|max:40',
        ]);
        
        $customer = new customer;
        $customer->name = $request->name;
        $customer->address = $request->email;
        $customer->type = $request->birth_date;
        $customer->gender = $request->gender; 
        $customer->dob = $request->country;
        // if($request->hasFile('image')) {
        //     $user->image = $request->image->store('profile_pics', 'public');
        // }
        $customer->save();

        $contact = new contact;
        $contact->customer_id = $customer->id;
        $contact->type = $request->contacttype;
        $contact->save();

        return redirect('/')->with('msg_success', 'User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customers = Customer::findOrFail($id);
        return view('customers.view',
            [
                'customerinfo' => $customer,  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
