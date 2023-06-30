<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function show() {

        $data= doctor :: all();
        return view('doctors', compact('data'));
    }
}
