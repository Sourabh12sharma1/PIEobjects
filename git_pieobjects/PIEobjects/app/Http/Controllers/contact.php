<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contact extends Controller
{
    public function index()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        $this->validate($request,[ 'name' => 'required',
            'email' => 'required',
           
            'subject' => 'required',
            'message' => 'required',
               ]);
			
            // $re= Validator::make($request->all(),[
            //     'fname' => 'required',
            //     'email' => 'required',
            //     'phone' => 'required|digits:10',
            //     'subject' => 'required',
            //     'aboutment' => 'required',
            //        ]);
            // if($re->fails())
            // {
            //     // return Response()->json(['errors'=>$re->errors()->all(), 'status'=>true]);
            //     return Response()->json(['errors'=>$re->errors()->all(), 'status'=>true]);
            // }
    // else{
            $obj =['name'=>$request->get('name'),
                    'email'=>$request->get('email'),
                    'subject'=>$request->get('subject'),
                   
                    'message'=>$request->get('message')
    
                ];
                // dd($obj);
                // $objs = new contact($obj);
                // $objs->save();
                mail::send('testmail', $obj, function($message) use ($obj){
                    $message->from($obj['email'])->subject($obj['subject']);
                    $message->to('parkenrohit@gmail.com');
                });
    
            // return view('contact');
        // }
        // return Response()->json(['msg'=>'Thanks For Contacting Us...','status'=>true]);
         // return Response()->json(array('msg'=>'We Will Contact You Soon...','status' => false));
        //  return back();
         return back()->with('success','Thanks For Contacting Us....');
    }
}
