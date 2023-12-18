<?php

namespace App\Notifications;
use App\Models\Plugin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DownloadNotification extends Notification
{
    use Queueable;

    protected $plugin;

    /**
     * Create a new notification instance.
     */
    public function __construct(Plugin $plugin)
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
        $acceptedRequestUrl = url('/accepted-requests');

        return (new MailMessage)
        ->line('Your request has been accepted!') // Update this line
        ->line('We are excited to share that your download request for "' . $this->plugin->name . '" has been accepted.')
        ->action('View Accepted Requests', $acceptedRequestUrl) // Link to the acceptedRequest route
        ->line('Thank you for choosing our service. Enjoy your experience!');
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
