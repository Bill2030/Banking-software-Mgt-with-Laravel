<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountManagement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $accounts = Account::all();
      
        return view("account.index", compact("accounts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $accounts = Account::all();
        $genders = Gender::all();
      
        return view("account.create", compact("accounts", "genders"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'gender'=>'required',
            'bank_account'=>'required',
            'branch'=>'required',
            'passport'=>'required',
            'account_number'=>'required',
            'account_type'=>'required',
            'card_type'=>'required',
        ]);
        $formFields['user_id'] = Auth::user()->id;
        $accounts = Account::create($formFields);
        return redirect()->back()->with('success','Account Created Successfully');
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
        //
    }
}
