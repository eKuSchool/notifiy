<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 07/12/2016
 * Hora: 23:38
 */

namespace eKuSchool\Notify\Notification;


use eKuSchool\Notify\Notification\Mail\NewPaymentMail;

class NewPaymentNotification extends NotifyService
{
    public $service = 'payment_received';

    public function __construct()
    {
        $this->mailer = new NewPaymentMail();
    }

    public function handle($receipt)
    {
        $this->getStudentUser($receipt);
        $this->subject = "Recibo n° #{$receipt->fake_code} @eKuEscola";

        return $this;
    }

}