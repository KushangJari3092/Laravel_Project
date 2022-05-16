<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    function getdata(Request $r)
    {
        $r->validate([
            'name'=>'required',
            'pwd'=>'required | min:5 |max:7'
        ]);
        
        return $r->input();
    }
}
