<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 04/11/2016
 * Hora: 11:08
 */

namespace eKutivaSolutions\Notify\Notification\Mail;


use Mail;

class NewPaymentMail extends MailService
{
    public $user;
    public $receipt;
    private $service = 'email_notification';

    public function handle($receipt, $user)
    {
        $this->user = $user;
        $this->receipt = $receipt;

        $this->subject = "Recibo n° #{$receipt->fake_code} @eKuEscola";

        return $this;
    }

    public function register($service)
    {
        $this->user = $service->user;
        $this->receipt = $service->relation;
        $this->subject = $service->subject;

        return $this;
    }

    public function notify()
    {
        if (setting($this->service)) {
            $user = $this->user;
            $receipt = $this->receipt;

            if (!$user || !$user->email) return;

            return Mail::queue('emails.new_payment', ['user' => $user, 'receipt' => $receipt], function ($message) use ($user) {
                $message->to($user->email, $user->short_name);
                $message->subject($this->subject);
            });
        }
    }
}