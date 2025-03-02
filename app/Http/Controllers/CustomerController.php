<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('customer')->with($data);
    }

    public function register(Request $request){

        //validation
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'

            ]
        );

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

    public function trash(){
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');//compact function array banane ka kaam karta hai jo data paas kiya uska
        return view('customer-trash')->with($data);
    }

    public function delete($id){
        $customer = Customer::find($id); //find function primary key ko target karta hai
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');

    }

    public function forceDelete($id){
        $customer = Customer::withTrashed()->find($id); //find function primary key ko target karta hai
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect()->back();

    }

    public function restore($id){
        $customer = Customer::withTrashed()->find($id); //find function primary key ko target karta hai
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer');

    }

    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            //not found
        return redirect('customer');

        }else{
            $title = "Update Customer";
            $url = url('/customer/update') ."/". $id;
            $data = compact('customer', 'url', 'title');
            return view('customer')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        // $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer');


    }

}
