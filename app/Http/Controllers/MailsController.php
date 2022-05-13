<?php

namespace App\Http\Controllers;

use App\Models\Mails;
use Illuminate\Http\Request;

class MailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->exepte('store');
    }
    public function index()
    {
        $mail = Mails::all();
        return view('mail.index')->with('mail',$mail);
    }

    
    public function create()
    {
        return view('mail.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'mail'=>'required|email'            
        ]);
         //dd($request);
         $mail = Mails::create([
            'mail'  => $request->mail
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $mail = Mails::where('id',$id)->first();
        return view('mail.edit')->with("mail",$mail);
    }

    public function update(Request $request,$id)
    {
        $mail = Mails::where('id', $id)->first();
        $this->validate($request, [
            'mail'=>'required|email'            
        ]);
        $mail->mail=$request->mail;
        $mail->save();
        return redirect()->back()->with('message','mail Updated Successfully!');
    }

    public function destroy($id)
    {
        $mail = Mails::where('id', $id)->first();
        $mail->forceDelete();
        return redirect()->back()->with('message','mail deleted Successfully!');
    }
}
