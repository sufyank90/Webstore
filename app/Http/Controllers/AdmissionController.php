<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function showForm()
    {
        return view('admission.form');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission here
    }
}
