<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getAllCustomers(Request $request): View
    {
        $query = DB::table('customers')->where('name', 'LIKE', $request->input('name').'%');
        if ($request->filled('email'))
        {
            $query = $query->where('email', '=', $request->input('email'));
        }
        if ($request->filled('phone'))
        {
            $query = $query->where('phone', '=', $request->input('phone'));
        }
        $query = $query->where('blocked', '=', $request->input('blocked'));
        return view('customers', [
            'customers' => $query->paginate(8)
        ]);
    }

    public function getById($customerId): View
    {
        $customer = Customer::find($customerId);
        return view('single_customer', [
            'c' => $customer,
            'addresses' => $customer->addresses
        ]);
    }
}
