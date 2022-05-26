<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'content' => 'required',
        ]);
        
        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to('info@inozemez.com', 'Ваш Inozemez')
                  ->subject('Нове оголошення із сайту');
});

        return back()->with(['message' => 'Ваше оголошення успішно надіслано! На вказану вами пошту, протягом 24 годин ми пришлемо підтвердження публікації!']);
    }
}