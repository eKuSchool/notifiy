<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 31/10/2016
 * Hora: 21:33
 */

namespace eKuSchool\Notify\Notification\Mail;


use Mail;

class ForgotPasswordMail extends MailService
{

    public function handle()
    {
        Mail::setQueue('Text to e-mail', function ($m) {
            $m->from('ekuescola@ekutivasolutions.com', 'eKuEscola');

            $m->to('maizer.gomes@gmail.com', 'Maizer Gomes')->subject('Your Reminder!');
        });
    }
}