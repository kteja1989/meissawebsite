<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $newContact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newContact)
    {
        //
        $this->newContact = $newContact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->subject('CLEAR Mailer: New Mail from: '.$this->newContact->name )
                            ->view('mails.newContactMail');
    }
}
