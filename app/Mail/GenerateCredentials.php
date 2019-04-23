<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GenerateCredentials extends Mailable
{
    use Queueable, SerializesModels;

    public $credentials = array(); 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct(array $data)
    {
        $this->credentials = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('vendor.notifications.verificationemail')
                    ->with([
                        'username' => $this->credentials['username'],
                        'password' => $this->credentials['password'],
                    ]);
    }
}
