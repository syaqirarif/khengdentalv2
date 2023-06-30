<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clerk;

class ClerkController extends Controller
{
    public function show() {

        $data= clerk :: all();
        return view('clerks', compact('data'));
    }

    public function edit() {
        
    }
}
