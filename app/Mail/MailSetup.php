<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Support\Facades\Auth;
class MailSetup extends Mailable
{
    use Queueable, SerializesModels;


    public $details;

    private $mail_template;

    public $receiver;


    /**
     * Create a new message instance.
     * @param $details - Array , $mail_template - String 
     */
    public function __construct($details, $mail_template = "default", $receiver)
    {
        $this->details          = $details;
        $this->mail_template    = $mail_template;
        $this->receiver         = $receiver;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        switch ($this->mail_template) {

            case 'verify_code':
                $page = "emails.customer.verifyCode";
            break;

            case 'verify_password_code':
                $page = "emails.customer.verify_password_code";
            break;

            case 'contact_message':
                $page = "emails.admin.contact_message";
            break;

            default:
                $page = "emails.templates.".$this->mail_template;
            break;
        }

        $sender     = (isset($this->details['sender']) ? $this->details['sender'] : '');
        $reply_to   = ($this->receiver == "noreply@gmail.com" ? $this->details['sender'] : noReplyEmail($this->receiver, $sender));
        return $this
            ->view($page)
             ->from($reply_to,'MyHomeCustomer')
                ->replyTo($reply_to)
                    ->subject($this->details['subject']);
    }
}
