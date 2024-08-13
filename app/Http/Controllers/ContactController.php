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

    function edit($id){
        $updateData = Contact::find($id);
        return view('components.edit', compact('updateData'));
    }
    public function update(Request $request, $id)
    {
        $update_data = Contact::find($id);
        $update_data -> name = $request -> get('name');
        $update_data -> email = $request -> get('email');
        $update_data -> phone = $request -> get('phone');
        $update_data -> address = $request -> get('address');
        

        $update_data -> save();
        return redirect() -> back() -> with('message','Update Content Successfully');
    }

    function show($id){
        $singleUser = Contact::find($id);
        return view('components.show', compact('singleUser'));
    }


      /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete_data = Contact::find($id);
        $delete_data -> delete();
        return redirect('/contacts');
    }

}
