<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function show() {

        $data= patient :: all();
        return view('patients', compact('data'));
    }
}
