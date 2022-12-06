<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePayment extends Notification
{
    use Queueable;
    private $payment_id;
    private $username;
    private $first_name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($payment_id,$username,$first_name)
    {
        $this->payment_id=$payment_id;
        $this->username=$username;
        $this->first_name=$first_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'payment_id'=>$this->payment_id,
            'username'=>$this->username,
            'first_name'=>$this->first_name
        ];
    }
}
