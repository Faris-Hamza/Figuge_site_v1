<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;
use App\Models\Mails;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($type,$c_ount)
    {   if ($type == "mail") {
            $mail = DB::select('SELECT * FROM mails ORDER BY created_at DESC LIMIT '.$c_ount.'');
           $affected = DB::update('update notifications set Veu = 1 where Type = "mail"');
           return view('mail.index')->with('mail',$mail);
        } else {
            // $mail = DB::select('SELECT * FROM mails ORDER BY created_at DESC LIMIT '.$c_ount.'');
            // return view('mail.index')->with('mail',$mail);
        }
    }

    public function edit(Notifications $notifications)
    {
        //
    }

    public function update(Request $request, Notifications $notifications)
    {
        //
    }

    public function destroy(Notifications $notifications)
    {
        //
    }
}
