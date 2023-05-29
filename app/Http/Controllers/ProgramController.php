<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function programs(){
        return view('programs.Programs');
    }
}
