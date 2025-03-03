<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function build(Request $request)
    {
        dd($request->all());
    }
}
