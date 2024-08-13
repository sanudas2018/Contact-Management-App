<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $allContacts = Contact::all();

        return view('components.index', compact('allContacts'));
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
        

        return redirect()->back() -> with('message','New Content Added Successfully');
    }

    function edit(){

        return view('components.edit');
    }

    function show($id){
        $singleUser = Contact::find($id);
        return view('components.show', compact('singleUser'));
    }
}
