<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Order;
use App\User;

class NewOrder extends Notification implements ShouldQueue
{
    use Queueable;
    protected $order;
    public $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Order $order,User $user)
    {
        $this->order=$order;
        $this->user=$user;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->greeting(sprintf('HI , %s', $this->user->name))
                    ->line('Your order recieved sucessfully .',
                     $this->user->name)
                    ->action('Replace your your points now', url('/exchange'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
