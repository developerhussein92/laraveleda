<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('front.customers.customers_list',compact("customers"));
    }

    public function show($id){
        $customer = Customer::withTrashed()->find($id);
        return view('front.customers.view_customer',compact("customer"));
    }

    public function new(){
        return view('front.customers.new_customer');
    }

    public function store(Request $req){
       
        $ext = $extension = $req->file('cimg')->extension();
        $filename = $req->file('cimg')->getClientOriginalName();

        $req->file('cimg')->storeAs('/public/images/customers',$filename);
        $c = new Customer;
        $c->cname = request('cname');
        $c->cphone = request('cphone');
        $c->cemail = request('cemail');
        $c->caddress = request('caddress');
        $c->cimg = $filename;
        $c->save();
        return redirect('/customers');
        
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('front.customers.update_customer',compact("customer"));
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
        return view('front.customers.search_by_phone');
    }

    public function result_by_phone()
    {
        $sc = request('sc');
        $customers = Customer::where('cphone',$sc)->get();
        return view('front.customers.search_by_phone',compact('customers'));
    }

    public function search_by_name()
    {
        return view('front.customers.search_by_name');
    }
    public function result_by_name()
    {
        $customers = Customer::where('cname',request('sn'))->get();
        return view('front.customers.search_by_name',compact('customers'));
    }

    public function search_by_email()
    {
        return view('front.customers.search_by_email');
    }

    public function result_by_email()
    {
        $se = request('se');
        $customers = Customer::where('cemail',$se)->get();
        return view('front.customers.search_by_email',compact('customers'));
    }

    public function search_by_address()
    {
        return view('front.customers.search_by_address');
    }
    public function result_by_address()
    {
        $customers = Customer::where('caddress',request('sa'))->get();
        return view('front.customers.search_by_address',compact('customers'));
    }

    public function search_by_fields()
    {
        return view('front.customers.search_by_fields');
    }
    public function result_by_fields()
    {
        $sf = request('sf');
        $field = request('field');
        $customers = Customer::where($field,$sf)->get();
        return view('front.customers.search_by_fields',compact('customers'));
    }

    public function dynamic_search()
    {
        return view('front.customers.dynamic_search');
    }
    public function result_dynamic_search()
    {
        $ds = request('ds');
        $matching =request('matching');

        if($matching == 'like')
        {
            $ds = '%'.$ds.'%';
        }

        $customers = Customer::where('cname',$matching,$ds)
                           ->orWhere('cphone',$matching,$ds)
                           ->orWhere('cemail',$matching,$ds)
                           ->orWhere('caddress',$matching,$ds)->get();

        return view('front.customers.dynamic_search',compact('customers'));
    }

    public function alldeleted()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('front.customers.deleted_customers_list',compact('customers'));
    }

    public function restore_customer($id)
    {
        Customer::withTrashed()->
                  where('id',$id)->
                  restore();

        return redirect('/customers');
    }



}
