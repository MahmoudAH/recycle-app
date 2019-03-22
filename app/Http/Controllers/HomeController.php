<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Mail;
use Session;
use     App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('welcome');
    }
    
    public function makeorder()
    {
        return view('MAKE_ORDER');
    }

    public function points()
    {
        return view('POINTS');
    }

    public function getcontactus()
    {
        return view('CONTACT_US');
    }

    public function about()
    {
        return view('ABOUT');
    }

    public function admin()
    {
  
        return view('admin');
    }

    public function postcontactus(Request $request)
    {
    /*
    $this->validate($request,[
    'name'=>'required|min:3',
    'telephone'=>'required|unique',
    'email'=>'required|email',
    'message'=>'min:15',
    ]);

 $request->validate([
      'name'=>'required|min:3',
        'telephone' => 'required|regex:/(01)[0-9]{9}/|size:11',
       //   ' email'=>'required|email',
       'message'=>'min:15',
        ],

       $messages = [
    'phone.required' => 'Unsupported phone number. ',
    'phone.regex' => 'Unsupported phone number. ',


    ]
    );
*/
    $validator = Validator::make($request->all(), [
        'name'=>'required|min:3',
        'telephone' => 'required|regex:/(01)[0-9]{9}/|size:11',
       //   ' email'=>'required|email',
        'message'=>'min:15',
    ],
    $messages = [
        'phone.required' => 'Unsupported phone number. ',
        'phone.regex' => 'Unsupported phone number. ',


    ]);

    $contact =Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'message' => $request->message,
    ]);

    $data=array(
        'name'=>'$request->name',
        'telephone'=>'$request->telephone',
        'email'=>'$request->email',
        'bodyMessage'=>'$request->message',


    );

    Mail::send('emails.contact',$data,function($message) use ($data){
     //$message->from($data['email']);
         //$message->to($data['email']);

        $message->from('vvvvh@gmail.com');
        $message->to('mah199645@gmail.com');
        $message->subject($data['bodyMessage']);

    });
    return redirect()->route('/contactus')->with('message', 'message received!');
        //Session::flash('success','ooooooh.your email was sent!'); 
       // return redirect()->route('/contactus') ; 
}
}
