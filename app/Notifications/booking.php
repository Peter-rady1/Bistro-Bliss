<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class booking extends Notification
{
    use Queueable;

    private $customer;
    private $time;
    private $date;
    private $phone;
    private $p_id;
    private $accept;
    // private $users_id;





    public function __construct( $bok , $ti , $da , $ph ,$accept)
    {
       $this->customer = $bok;
       $this->time =  $ti;
       $this->date =  $da;
       $this->phone =  $ph;
       $this->accept=  $accept;
    }

   
    public function via(object $notifiable): array
    {
        return ['database'];
    }


    public function toArray(object $notifiable): array
    {
        return [
          'customer' => $this->customer,
          'time' => $this->time,
          'date' => $this->date,
          'phone' => $this->phone,
          'p_id' => $this->p_id
        ];
    }
}
