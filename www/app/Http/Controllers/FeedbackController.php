<?php

namespace App\Http\Controllers;

use stdClass;
use App\Mail\FeedbackMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller {
    public function index() {
        return view('feedback.index');
    }

    public function send(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:500',
            'image' => 'mimes:jpeg,jpg,png|max:5000',
        ]);
        $image = $request->file('image');
        if ($image) { // был загружен файл изображения
            $raw = $image->get();
            $ext = $image->extension();
            $path = $image->store('feedback', 'local');
        }
        $data = new stdClass();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->image = $raw ?? null;
        $data->ext = $ext ?? null;
        $data->image = $path ?? null;
        Mail::to($data->email)->send(new FeedbackMailer($data));
        return redirect()->route('feedback.index')
            ->with('success', 'Ваше сообщение успешно отправлено');
    }
}
  