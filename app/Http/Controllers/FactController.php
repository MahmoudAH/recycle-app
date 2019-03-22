<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactController extends Controller
{
    public function fact()
    {
        return view('facts.things');
    }
      public function magic()
    {
        return view('facts.magic');
    }
      public function population()
    {
        return view('facts.population');
    }
}