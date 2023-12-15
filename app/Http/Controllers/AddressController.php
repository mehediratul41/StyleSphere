<?php

namespace App\Http\Controllers;

use App\Models\Address;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    //Viewing addresses
    public function view()
    {
        $addresses = Address::all();
        $data = compact('addresses');
        // echo "<pre>";
        // print_r($data);
        // die;
        return view('address')->with($data);
    }
}
