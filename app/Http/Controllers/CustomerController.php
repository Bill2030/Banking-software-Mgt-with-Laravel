<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Requestts\select;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $customers = Customer::all();
        return view("customers.index", compact("customers"));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("customers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $formFields = $request->validate([
            'name'=>['required','string'],
            'email'=>['required','string','email','unique:customers,email'],
            'passport'=>'required',
            'balance'=>'required',
            'country'=> 'required',
            'address'=> 'required',
            'city'=>'required',
               
        ]);
        $formFields['user_id'] = Auth::user()->id;
      
        $customer = Customer::create($formFields);
        return redirect()->route('customers.index')->with('success','Customer created successfully');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->back()->with('success','customer deleted successfully');
    }
}
