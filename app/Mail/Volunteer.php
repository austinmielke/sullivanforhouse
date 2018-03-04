<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Volunteer extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $interests;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->interests = $request->interests;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.volunteer')
            ->subject('Volunteer: ' . $this->name)
            ->from($this->email, $this->name)
            ->replyTo($this->email);
    }
}
