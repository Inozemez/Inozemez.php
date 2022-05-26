<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMailer extends Mailable {

    use Queueable, SerializesModels;

    public $data;

    public function __construct(stdClass $feedback) {
        $this->data = $feedback;
    }

    public function build() {
        if ($this->data->image) {
            $this->attachData($this->data->image, 'image.'.$this->data->ext);
        }
        $this->subject('Форма обратной связи')
            ->view('email.feedback');
    }
}