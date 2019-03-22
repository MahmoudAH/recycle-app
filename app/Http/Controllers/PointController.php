<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PointController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    public $points1="100";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exchange()
    {
       $points1=200;
       $points2=400;
       $points3=400;
       $points4=300;
       $points5=200;
       $points6=200;
       
        return view ('orders.exchange',compact('points1','points2','points3','points4','points5','points6'));
    }
     public function check()
        {
        $points3=400;
        $nowpoints=0;
        $user = Auth::user();
        if (auth()->user()->points < $points3) {

        return back()->with('message', 'sorry!..your points is not equivalent ');  
                }
                else{
                   // $nowpoints=auth()->user()->points - $points3;
                   
                   $user = Auth::user()->decrement('points',$points3);
                    //s$points3=$nowpoints;
                   return back()->with('message', 'congratulations!...replaced successfully.you can visit us at any time to take your thing ');   
                }
        }

 public function check1()
        {
        $points1=200;
        $nowpoints=0;
        $user = Auth::user();
        if (auth()->user()->points < $points1) {

        return back()->with('message', 'sorry!..your points is not equivalent ');  
                }
                else{
                   // $nowpoints=auth()->user()->points - $points3;
                   
                   $user = Auth::user()->decrement('points',$points1);
                    //s$points3=$nowpoints;
                   return back()->with('message', 'congratulations!...replaced successfully.you can visit us at any time to take your thing ');   
                }
        }

public function check2()
        {
        $points2=400;
        $nowpoints=0;
        $user = Auth::user();
        if (auth()->user()->points < $points2) {

        return back()->with('message', 'sorry!..your points is not equivalent ');  
                }
                else{
                   // $nowpoints=auth()->user()->points - $points3;
                   
                   $user = Auth::user()->decrement('points',$points2);
                    //s$points3=$nowpoints;
                   return back()->with('message', 'congratulations!...replaced successfully.you can visit us at any time to take your thing ');   
                }
        }

        public function check4()
        {
        $points4=200;
        $nowpoints=0;
        $user = Auth::user();
        if (auth()->user()->points < $points4) {

        return back()->with('message', 'sorry!..your points is not equivalent ');  
                }
                else{
                   // $nowpoints=auth()->user()->points - $points3;
                   
                   $user = Auth::user()->decrement('points',$points4);
                    //s$points3=$nowpoints;
                   return back()->with('message', 'congratulations!...replaced successfully.you can visit us at any time to take your thing ');   
                }
        }

        public function check5()
        {
        $points5=200;
        $nowpoints=0;
        $user = Auth::user();
        if (auth()->user()->points < $points5) {

        return back()->with('message', 'sorry!..your points is not equivalent ');  
                }
                else{
                   // $nowpoints=auth()->user()->points - $points3;
                   
                   $user = Auth::user()->decrement('points',$points5);
                    //s$points3=$nowpoints;
                   return back()->with('message', 'congratulations!...replaced successfully.you can visit us at any time to take your thing ');   
                }
        }

        public function check6()
        {
        $points6=300;
        $nowpoints=0;
        $user = Auth::user();
        if (auth()->user()->points < $points6) {

        return back()->with('message', 'sorry!..your points is not equivalent ');  
                }
                else{
                   // $nowpoints=auth()->user()->points - $points3;
                   
                   $user = Auth::user()->decrement('points',$points6);
                    //s$points3=$nowpoints;
                   return back()->with('message', 'congratulations!...replaced successfully.you can visit us at any time to take your thing ');   
                }
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
