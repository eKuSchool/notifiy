<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 07/12/2016
 * Hora: 23:38
 */

namespace eKuSchool\Notify\Notification;


use eKuSchool\Notify\Notification\Mail\NewBackupMail;

class NewBackupNotification extends NotifyService
{
    protected $service = 'automatic_backup';

    public function __construct()
    {
        $this->mailer = new NewBackupMail();
    }

    public function handle($backup)
    {
        $this->user = (object)[
            'email'      => setting('backup_email'),
            'short_name' => 'Administrator',
        ];

        $this->relation = $backup;
        $this->subject = "Backup da base de dados @eKuEscola";

        return $this;
    }

}