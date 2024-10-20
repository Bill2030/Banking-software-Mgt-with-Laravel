<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $customers = Customer::count();
        $transactions = Transaction::count();
        $statements = Transaction::orderBy('created_at', 'desc')->paginate(10);
        $totalcredits = Transaction::where('Type','=' ,'credit')->count();
        $totaldebits = Transaction::where('Type','=' ,'debit')->count();
       
        return view("admin.dashboard", compact("customers", "transactions", "statements","totalcredits", "totaldebits"));
    }

    public function summary()
    {

        $summaries = Transaction::all();
        //return json_decode($summaries, true);
        return view("admin.dashboard", compact("summaries"));
    }

   
}
