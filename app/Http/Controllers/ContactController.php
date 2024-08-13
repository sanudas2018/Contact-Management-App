<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){

        return view('components.index');
    }
    function create(){

        return view('components.create');
    }
    public function store(Request $request)
    {
        // $newContactData = new Contact([
        //     'name' => $request -> get('name'),
        //     'email' => $request -> get('email'),
        //     'phone' => $request -> get('phone'),
        //     'address' => $request -> get('address')
        // ]);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Contact::create($request->all());
        

        return redirect()->back();
    }

    function edit(){

        return view('components.edit');
    }

    function show(){

        return view('components.show');
    }
}
