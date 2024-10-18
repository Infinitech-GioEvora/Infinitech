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
        return $this->view('Mail.service_details')
            ->subject('Service Details with PDF')
            ->attach($this->pdfPath, [
                'as' => 'service-details.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
