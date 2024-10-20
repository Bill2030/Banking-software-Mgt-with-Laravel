<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionType;

class TransactionController extends Controller
{
    public function index()
    {

        $transactions = Transaction::all();
        $customers = Customer::all();
        $types = TransactionType::all();
        return view("transactions.index", compact("transactions", "customers", "types"));
    
    }
    public function postTransaction(Request $request)

    {
        $request->validate([
            'customer_id'=>'required|exists:customers,id',
            'amount'=> 'required|numeric',
            'type' => 'required|in:credit,debit',
        ]);
        $customer = Customer::find($request->customer_id);

     
        // Create the transaction
        $transaction = Transaction::create([
            'customer_id' => $customer->id,
            'amount' => $request->amount,
            'type' => $request->type,
        ]);
        // Update the balance based on the transaction type
        if ($transaction->type === 'credit') {
            $customer->balance += $transaction->amount;
        } elseif ($transaction->type === 'debit') {
            $customer->balance -= $transaction->amount;
        }

        $customer->save();


        return redirect()->back()->with('success',' Transactions Posted Successfully');

        // return response()->json([
        //     'message' => 'Transaction posted successfully',
        //     'customer_balance' => $customer->balance,
        // ]);
    }

    public function withdraw()
    {
        $withdrawals = Transaction::where('Type', '=','credit')->orderBy('created_at','desc')->get();
        
        return view('transactions.withdraw', compact('withdrawals'));
    
    }

    public function deposit()
    {
        $deposits = Transaction::where('Type', '=','debit')->orderBy('created_at','desc')->get();
        
        return view('transactions.deposit', compact('deposits'));
    }
    
}
