<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DptController extends Controller
{
        public function index()
    {
        return view('dpt/index');
    }

    public function dpt(){
    	$dpt = Auth::dpt();
        return view('dpt.index', compact('dpt'));
    }
}
