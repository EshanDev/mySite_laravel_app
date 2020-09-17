<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->url = route('auth.register', $this->data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@self-trainnig.in.th')
            ->subject('Registration Code Send')
            ->view('emails.registration_code')
            ->with('data', $this->data);
    }
}
