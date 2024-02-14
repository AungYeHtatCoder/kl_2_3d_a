<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwodPlayIndexController extends Controller
{
    public function index()
    {
        return view('two_d.index');
    }
}