<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'msg' => 'required',
            ]);

            Mail::send(new ContactEmail($request->all()));

            $request->session()->flash('status', 'Sua mensagem foi recebida e iremos te responder o mais breve possivel.');
            return redirect()->back();
        }

        return view('contact');
    }
}
