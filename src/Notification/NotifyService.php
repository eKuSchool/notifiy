<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 07/12/2016
 * Hora: 23:35
 */

namespace eKuSchool\Notify\Notification;

use eKuSchool\Notify\Notification\Mail\MailService;

abstract class NotifyService
{
    public $user;

    public $relation;

    public $service;

    public $subject = 'Mensagem @eKuEscola';

    /**
     * @var MailService
     */
    public $mailer;

    abstract public function __construct();

    abstract public function handle($relation);

    public function getStudentUser($relation)
    {
        $this->user = $relation->student->user;
        $this->relation = $relation;
    }

    public function notify()
    {
        if (setting($this->service)) {
            $user = $this->user;

            if (!$user || !$user->email) return;

            $this->sendEmail();
            $this->sendSMS();
            $this->sendInAppMessage();
            $this->sendInAppNotification();
        }
    }

    protected function sendEmail()
    {
        $this->mailer->register($this)->notify();
    }

    protected function sendSMS()
    {

    }

    protected function sendInAppMessage()
    {

    }

    protected function sendInAppNotification()
    {

    }
}