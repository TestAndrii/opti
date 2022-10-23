<?php

namespace App\Mail;

use App\Models\Opti;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OptiTestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\Opti
     */
    public Opti $opti;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Opti $opti)
    {
        $this->opti = $opti;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Opti Test Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.opti',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments(): array
    {
        return [];
    }
}
