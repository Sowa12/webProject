<?php

namespace App\Notifications;

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMessage;
use App\Http\Requests\ContactRequest;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class TelegramModal extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
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

    public function toTelegram($notifiable)
    {
        return TelegramFile::create()
            ->content("Имя: $notifiable->firstName\nФамилия: $notifiable->secoundName\nПочта: $notifiable->email\nТип работы: $notifiable->workType\nМатериал: $notifiable->matType\nВысота: $notifiable->height\nДлина: $notifiable->width\nИмя файла: $notifiable->fileName");
    }
}
