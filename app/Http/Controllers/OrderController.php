<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Contact;
use App\Order;
use App\USer;
//use App\Mail\newOrder;
use App\Notifications\RecievedOrder;
use Illuminate\Support\Facades\Auth;
use App\Events\OrderExist;
use App\Notifications\NewOrder;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request )
    {
        $request->validate([

            'city' => 'required|not_in:0',
            'return' => 'required|not_in:0'
        ]);
//        $user = Auth::user();
//'user_id' => auth()->user()->id
        //            'user_id' => Auth::user()->id ,

        $order = Order::create([
            // $habit->user_id = auth()->user()->id;
            'user_id' => auth()->user()->id,
            'city' => $request->city,
            'return' => $request->return,
            'glass' => $request->glass,
            'paper' => $request->paper,
            'steal' => $request->steal,
            'food' => $request->food,
            'plastic_bages' => $request->plastic_bages,
            'kanz_containers' => $request->kanz_containers,
            'plastic_containers' => $request->plastic_containers,
            'electronic' => $request->electronic,
            'instructions' => $request->instructions,
        ]);
            $user = Auth::user()->increment('orders',1);

            $user = Auth::user();

      //event(new OrderExist($order));
  

      $user->notify(new NewOrder($order,$user));

     if(Input::has('return') == 'point') {
          $glass=10;
          $paper=10;
          $electronic=10;
          $plastic_bages=10;
          $plastic_containers=10;
          $steal=10;
          $food=10;
          $kanz_containers=10;
          $result=0;

          if(!empty($request->input('glass')) && !empty($request->input('paper'))) {
             $result = $glass + $paper;
            $user = Auth::user()->increment('points', $result);

 }
         /*elseif(!empty($request->input('paper'))) {
            $result += $paper;
         $user = Auth::user()->increment('points', $result);
 }
       else{
         $user = Auth::user()->increment('points', 1);

       }*/
}
    return redirect()->route('user.makeorder.show',$order)->with('message', 'Order received!');
    //$job=(new SendMail($user,$order));
      //$this->dispatch($job);

        //return back();
          
     
     //  event(new OrderExist($order));

    }

/*   public function sendordermail(Request $request,Order $order)
   {
        $order = Order::findOrFail($order);

     \Mail::to('mah199645@gmail.com')
     ->send(new newOrder($order));
  }
*/
   
   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
 //$user=User::find($id);
//$user = DB::table('users')->where('id', '=', $id)->increment('points',10);
     // $user = Auth::user()->increment('points',10);

        return view('show', compact('order'));
    }

    


    public function manageorders(){
            $orders=Order::all();
        return view('admin.manage.manageorders',compact('orders'));
    }
    //event(new AddPoint($user));

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
