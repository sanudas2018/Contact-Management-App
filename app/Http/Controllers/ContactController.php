<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){

        return view('components.index');
    }
    function create(){

        return view('components.create');
    }
    function edit(){

        return view('components.edit');
    }

    function show(){

        return view('components.show');
    }
}
