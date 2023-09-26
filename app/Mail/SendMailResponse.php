<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailResponse extends Mailable
{
    use Queueable, SerializesModels;

    public $content;

    public function __construct($content)
    {
        $this->content = $content;

    }

    public function build()
    {
        return $this->from('jesmarydelvalle62@gmail.com')
                    ->view('mails.email')
                    ->subject($this->content->subject)
                    //->text('mails.email_plain')
                    /*->with(
                      [
                            'testVarOne' => '1',
                            'testVarTwo' => '2',
                      ])*/
                    ->attachFromStorage($this->content->file);
    }


    /**
     * Get the message envelope.
     */
/*    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Mail Response',
        );
    }*/

    /**
     * Get the message content definition.
     */
   /* public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }*/

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
  /*  public function attachments(): array
    {
        return [];
    }*/
}
