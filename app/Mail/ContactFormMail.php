<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        return $this->from($this->data['email_address'], $this->data['name'])
        ->to('khaled.amoudi00@gmail.com')
        ->subject('🚀 𝗡𝗘𝗪 𝗖𝗢𝗡𝗧𝗔𝗖𝗧 𝗙𝗥𝗢𝗠 𝗣𝗢𝗥𝗧𝗙𝗢𝗟𝗜𝗢 🚀')
        ->view('emails.contact');
    }
}
