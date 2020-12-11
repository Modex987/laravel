<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email'])
                    ->subject('A new Form Has been submitted')
                    // ->with([
                    //     'name' => $this->data['name'],
                    //     'email' => $this->data['email'],
                    //     'message' => $this->data['message']
                    // ]) # then you could use them just like $name ...
                    ->markdown('emails.contact.contact_us');
    }
}
