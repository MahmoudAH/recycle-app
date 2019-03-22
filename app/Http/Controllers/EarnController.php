<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarnController extends Controller
{
    public function earnfromwaste()
    {
        return view('earnfromwaste.earn');
    }
     public function junkmail()
    {
        return view('earnfromwaste.junkmail');
    }
    public function sell()
    {
        return view('earnfromwaste.sell');
    }
}
