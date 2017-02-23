<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 02/11/2016
 * Hora: 12:38
 */

namespace eKutivaSolutions\Notify\Notification\Mail;


abstract class MailService
{
    public $subject = 'Mensagem @eKuEscola';

    abstract public function handle($relation, $user);

    /**
     * @param $notifierService
     *
     * @return $this
     */
    abstract public function register($notifierService);

    abstract public function notify();
}