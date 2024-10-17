<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServiceDetails extends Mailable
{
    use Queueable, SerializesModels;

    protected $pdfPath;

    public function __construct($pdfPath)
    {
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this
            ->subject('Your Service Details')
            ->view('Mail.service-details')
            ->attach($this->pdfPath);
    }
}

