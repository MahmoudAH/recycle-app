<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
     public function paper()
    {
      return view('paper');
    }
     public function aluminum()
    {
      return view('aluminum');
    } 
    public function food()
    {
      return view('food');
    }
    public function glass()
    {
      return view('glass');
    }
     public function steal()
    {
      return view('steal');
    }
     public function plastic()
    {
      return view('plastic');
    } 
    public function electronics()
    {
      return view('electronics');
    }
    public function househould()
    {
      return view('househould');
    }
    public function cartons()
    {
      return view('cartons');
    }
    public function plastic_bages()
    {
      return view('plastic_bages');
    }

}
