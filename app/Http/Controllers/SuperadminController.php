<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{

    public function index(Request $request)
    {
        return view('hrm.login');
    }

}
