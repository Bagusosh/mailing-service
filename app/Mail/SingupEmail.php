<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SingupEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->singup_mail_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from( ['address' => 'support@flick.id', 'name' => 'Flick Careers'])->subject(subject:'Welcome to Flick' ) 
        // -> view('mail.singup-email', ['mail_data' => $this->singup_mail_data]);
        return $this->subject('This is for testing Mailing Service')->view('mail.singup-email')
        ->with([
            'data' => $this->singup_mail_data,
        ]);
    }
}
