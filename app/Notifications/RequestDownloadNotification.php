<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RequestDownloadNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $plugin;

    public function __construct($plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Great news!')
            ->line('Your request to download the awesome addon "' . $this->plugin->name . '" has been received.')
            ->action('Download Now', url('/thankYou')) // Update the URL with your download route
            ->line('Get ready to experience a new level of excitement with our incredible addon!')
            ->line('Thank you for choosing us. Enjoy!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
