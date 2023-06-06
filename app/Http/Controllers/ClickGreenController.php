<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClickGreenController extends Controller
{
    public function cg_member()
    {
        return view('clickgreen.cg_beawarrior');
    }
    public function cg_about()
    {
        return view('clickgreen.cg_about');
    }
    public function cg_login()
    {
        return view('clickgreen.cg_login');
    }
}