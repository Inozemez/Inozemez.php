<?php

namespace App\Mail;

use Illuminate\Support\Facades\Storage;
use stdClass;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMailer extends Mailable {

    use Queueable, SerializesModels;

    public $data;

    public function __construct(stdClass $data) {
        $this->data = $data;
    }


    public function build() {
        if ($this->data->image) {
            $this->attachFromStorageDisk('local',$this->data->image, 'image.'.$this->data->ext);
        }
        return $this->subject('Форма обратной связи')
            ->view('email.feedback');
            $this->withSwiftMessage(function ($message) {
                $message->getHeaders()->addTextHeader('Custom-Header', 'HeaderValue');
            });
    }
}