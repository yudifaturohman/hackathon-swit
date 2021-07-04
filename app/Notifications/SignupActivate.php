<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SignupActivate extends Notification
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
        $url = url('/auth/signup/konfirmasi/'.$notifiable->activation_token);
        
        return (new MailMessage)
                    ->greeting('Hai '.$notifiable->nama.',')
                    ->subject('Konfirmasi - ONTA')
                    ->line('Kamu sudah melakukan pendaftaran di aplikasi ONTA - Online Travel Agent, agar akun kamu aktif silahkan lakukan "Konfirmasi Akun". Klik tombol di bawah ini :')
                    ->action('Konfirmasi Akun',url($url))
                    ->line('Terima kasih udah menggunakan aplikasi ONTA ini yaa');
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
