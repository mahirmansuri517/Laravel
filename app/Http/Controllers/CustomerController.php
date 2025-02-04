<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view('customer');
    }

    public function register(Request $request){
        echo "<pre>";
        print_r($request->all());
        //Insert query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        // $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer');
    }

    // public function store(Request $request)
    // {
    //     dd($request->all()); // This will dump all form data
    // }

    public function view(){
        $customers = Customer::all();
        $data = compact('customers');//compact function array banane ka kaam karta hai jo data paas kiya uska
        return view('customer-view')->with($data);
    }

    public function delete($id){
        $customer = Customer::find($id); //find function primary key ko target karta hai
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');
        
    }

}
