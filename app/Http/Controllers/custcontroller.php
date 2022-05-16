<?php

namespace App\Http\Controllers;

use  App\Models\Customer;
use Illuminate\Http\Request;

class custcontroller extends Controller
{
    public function index() //get method walu
    {
        $url = url('/customer');
        $title = "customer registration";
        $data = compact('url','title');
        return view('custform')->with($data);
    }

    public function store(Request $r)   //post method walu
    {
        // echo "<pre>";
        // print_r($r->all());

            //insertion
        $cust = new Customer;
        $cust->cust_name = $r['name'];
        $cust->email = $r['email'];
        $cust->address= $r['address'];
        $cust->city= $r['city'];
        $cust->state= $r['state'];
        $cust->password= md5($r['pwd']); //to encode in hash
        $cust->dob= $r['dob'];
        $cust->gender= $r['gender'];
        $cust->save();

        return redirect('/customer/view');
    }

    //selection
    public function view()
    {
        $cust = Customer::all();
        $data = compact('cust');
        return view('custview')->with($data);
    }


    //deletion
    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->back();
    }

   
    public function edit($id)
    {
        $cust=Customer::find($id);

        if(is_null($cust))
        {
            //not found
            return redirect('custview');
        }
        else
        {
            //found
            $title="update customer";
            $url = url('/customer/update')."/".$id;
            $data = compact('cust','url','title');
            return view('custform')->with($data);
        }
    }
    
}
