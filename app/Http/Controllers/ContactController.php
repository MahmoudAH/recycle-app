<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use Session;
use App\Contact;
use  App\Mail\newContact;

class ContactController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
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
        //
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
    public function getcontactus()
    {
        return view('CONTACT_US');
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
    /*  $validator=Validator::make($request->all(), [
        'name'=>'required|min:3',
        'telephone' => 'required|regex:/(01)[0-9]{9}/|size:11',
         ' email'=>'required|email',
         'message'=>'min:15',
        ],
       $messages = [
    'phone.required' => 'Unsupported phone number. ',
    'phone.regex' => 'Unsupported phone number. ',


        ]);
*/
     $request->validate([
        'name'=>'required|min:3',
        'telephone' => 'required|regex:/(01)[0-9]{9}/|size:11',
         ' email'=>'email',
         'message'=>'min:15',
        ],
       $messages = [
    'telephone.required' => 'Unsupported phone number. ',
    'telephone.regex' => 'Unsupported phone number. ',

]
       );



     $contact =Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'message' => $request->message,
            ]);



/* \Mail::to('mah199645@gmail.com')
    ->send(new newContact($request));
*/

   return redirect('/contactus')->with('message','your message has been recieved!.we will help you soon');
/*




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
*/

//return redirect()->route('/contactus')->with('message', 'message received!');
        //Session::flash('success','ooooooh.your email was sent!'); 
       // return redirect()->route('/contactus') ; 
    }
}
