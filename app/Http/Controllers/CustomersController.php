<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers_list',compact("customers"));
    }

    public function show($id){
        $customer = Customer::find($id);
        return view('view_customer',compact("customer"));
    }

    public function new(){
        return view('new_customer');
    }

    public function store(){
        $c = new Customer;
        $c->cname = request('cname');
        $c->cphone = request('cphone');
        $c->cemail = request('cemail');
        $c->caddress = request('caddress');
        $c->save();
        return redirect('/customers');
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('update_customer',compact("customer"));
    }

    
    public function update($id){
        $c = Customer::find($id);
        $c->cname = request('cname');
        $c->cphone = request('cphone');
        $c->cemail = request('cemail');
        $c->caddress = request('caddress');
        $c->save();
        return redirect('/customers/'.$id);
    }


    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customers');
    }

    public function search_by_phone()
    {
        return view('search_by_phone');
    }

    public function result_by_phone()
    {
        $sc = request('sc');
        $customers = Customer::where('cphone','like',$sc)->get();
        return view('search_by_phone',compact('customers'));
    }

    public function search_by_name()
    {
        return view('search_by_name');
    }

}
