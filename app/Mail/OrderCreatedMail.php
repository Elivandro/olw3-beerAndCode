<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(Public Order $order)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seu pedido foi feito com sucesso!',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.order-created',
            with: [
                'order' => $this->order,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
