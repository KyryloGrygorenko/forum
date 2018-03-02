<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class JSController extends Controller
{
    public function index()
    {

//        dump(Carbon::now());
//        dump(Carbon::now('Europe/Kiev'));
//        exit;
        return view('js.index');
    }

    
}
