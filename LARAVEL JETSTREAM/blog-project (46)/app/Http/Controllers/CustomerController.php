<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        return view('frontEnd.customer.register-customer');
    }

    public function saveCustomer(Request $request)
    {
        Customer::saveCustomer($request);
        return back()->with("message", "Registered successfully!!");
    }

    public function loginCustomer()
    {
        return view('frontEnd.customer.login-customer');
    }

    public function logoutCustomer()
    {
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }

    public function loginCheckCustomer(Request $request)
    {
        $customerInfo = Customer::where('email', $request->user_name)
            ->orWhere('phone', $request->user_name)
            ->first();
        if ($customerInfo) {
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)) {
                session()->put('customerId', $customerInfo->id);
                session()->put('customerName', $customerInfo->name);

                return redirect()->route('home');
            } else {
                return back()->with("message", "Wrong password!!");
            }
        } else {
            return back()->with("message", "Email or Phone not found!!");
        }
    }
}
