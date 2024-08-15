<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    
    public function searchData(Request $request){
        $data = $request -> input('searchdata');
        $allContacts = Contact::where('name', 'like', '%'.$data.'%') 
        -> orWhere('email', 'like', '%'.$data.'%')
        -> get();

       return view('components.index', compact('allContacts'));
    }

   /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data = $request -> data_filter;
        $data = $request -> get('status');
        if($data == 'name'){
        $allContacts =  Contact::orderBy('name') -> get();
        }else if($data == 'created_at'){
        $allContacts =  Contact::orderBy('created_at', 'DESC') -> get();
        }else{

            $allContacts = Contact::all();
        }

        return view('components.index', compact('allContacts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Contact::create($request->all());
        

        return redirect()->back() -> with('message','New Content Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $singleUser = Contact::find($id);
        return view('components.show', compact('singleUser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $updateData = Contact::find($id);
        return view('components.edit', compact('updateData'));
    }

    /**
     * Update the specified resource in storage.
     */
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
