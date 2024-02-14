<?php

namespace App\Http\Controllers\User\Dream;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwodDreamBookController extends Controller
{
    public function index()
    {
        return view('two_d.dreambook.twoD-dream-book');
    }
}