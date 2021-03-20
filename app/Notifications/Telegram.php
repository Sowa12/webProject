<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use App\Http\Requests\ContactRequest;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class Telegram extends Notification
{
    use Queueable;
    protected $name;
    protected $mail;
    protected $message;
    protected $phone;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $req) {
        $this->name     = $req->input('name');
        $this->mail    = $req->input('email');
        $this->phone    = $req->input('phone');
        $this->message  = $req->input('message');
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return [TelegramChannel::class];
    }
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable) {
        return [$notifiable->name,
                $notifiable->email,
                $notifiable->phone,
                $notifiable->message];
    }
    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->content("Имя: $notifiable->name\nEmail: $notifiable->email\nНомер телефора: $notifiable->phone\nСообщение: $notifiable->message");
    }
}
