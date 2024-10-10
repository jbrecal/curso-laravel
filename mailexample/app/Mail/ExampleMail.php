<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;

    
    
    public function __construct(public $name
    )
    {
        //
    }

 
    public function envelope(): Envelope  //informacion adicional al envio que no es el mail en si mismo
    {
        return new Envelope(
            subject: 'This is an Example Mail',
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
        );
    }

   
    public function content(): Content //la que se encarga de establecer el contenido del correo, lo hacemos a través de una vista
    {
        return new Content(
            view: 'emails.example',
        );
    }

   
    public function attachments(): array  //funcion que se encarga de enviar los adjuntos
    {
        return [];
    }
}
