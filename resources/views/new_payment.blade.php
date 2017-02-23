<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Email @eKuEscola</title>
</head>
<body>
<div style="background: rgb(248,249,250);min-height: 100.0%;margin: 0;padding: 0;width: 100.0%;">
    <center>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background: rgb(248,249,250);border-collapse: collapse;min-height: 100.0%;margin: 0;padding: 0;width: 100.0%;" bgcolor="#f8f9fa" min-height="100%">
            <tbody>
            <tr>
                <td align="center" valign="top" style="border-top-width: 0;min-height: 100.0%;margin: 0;padding: 20.0px 10.0px;width: 100.0%;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;border: 0;max-width: 600.0px;">
                        <tbody>
                        <tr>
                            <td align="center" valign="top" style="text-align: center;background: rgb(248,249,250);border-bottom-color: rgb(46,200,102);border-bottom-style: solid;border-bottom-width: 10.0px;border-top-width: 0;" bgcolor="#f8f9fa">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tbody>
                                    <tr>
                                        <td valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                <tbody>
                                                <tr>
                                                    <td valign="top" style="text-align: center;">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" valign="top" style="text-align: center;color: rgb(255,255,255);font-family: Helvetica;font-size: 11.0px;line-height: 125.0%;padding: 9.0px 18.0px;text-align: center;">
                                                                    <img align="center" height="40" id="4585635000000312003_imgsrc_url_0" style="border: 0;height: auto;margin: 0.0px;margin-bottom: 10.0px;outline: none;text-decoration: none;width: 180.0px;" width="180" src="{{asset('images/logos/default_logo.png')}}">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="background: rgb(255,255,255);border-bottom-width: 0;border-top-width: 0;" bgcolor="#ffffff">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tbody>
                                    <tr style="border-bottom: 1.0px solid rgb(239,241,243);border-left: 1.0px solid rgb(239,241,243);border-right: 1.0px solid rgb(239,241,243);">
                                        <td valign="top" style="padding-top: 30.0px;padding-bottom: 30.0px;padding-left: 20.0px;padding-right: 20.0px;">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="top" style="color: rgb(96,96,96);font-family: Verdana , Geneva , sans-serif;font-size: 15.0px;line-height: 125.0%;padding: 9.0px 18.0px 0.0px 18.0px;text-align: left;" align="left">
                                                                    <span style="font-family: arial , helvetica neue , helvetica , sans-serif;"> Olá {{ $user->short_name }},
                                                                        <br>
                                                                        <br> Enviamos-lhe este email para informar que foi registado um pagamento em seu nome com os seguintes dados:
                                                                        <br>
                                                                        <br>
                                                                        <table border="1" style="font-size: 12px;width:100%;border-collapse: collapse;">
                                                                            <tr>
                                                                                <td>Recibo #</td>
                                                                                <td>Forma Pagto</td>
                                                                                <td>Data Depósito</td>
                                                                                <td>Data Lançamento</td>
                                                                                <td>Valor</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>{{ $receipt->fake_code }}</td>
                                                                                <td>{{ trans('sys/payments.types.'.strtolower($receipt->paymentMethod->name)) }}</td>
                                                                                <td>{{ $receipt->payment_date }}</td>
                                                                                <td>{{ $receipt->created_at->format('d-m-Y') }}</td>
                                                                                <td>{{ $receipt->ammount }} {{ setting('currency') }}</td>
                                                                            </tr>
                                                                        </table>
                                                                        {{--<br><br>--}}
                                                                        {{--<table border="1" style="font-size: 12px;width:100%;border-collapse: collapse;">--}}
                                                                        {{--<tr>--}}
                                                                        {{--<td>Tipo de Pagamento</td>--}}
                                                                        {{--<td>Descrição</td>--}}
                                                                        {{--<td>Valor</td>--}}
                                                                        {{--</tr>--}}
                                                                        {{--@foreach($receipt->details as $detail)--}}
                                                                        {{--<tr>--}}
                                                                        {{--<td> {{ trans('sys/payments.types.'.$detail->charge_type) }}</td>--}}
                                                                        {{--<td> {{ $detail->description }}</td>--}}
                                                                        {{--<td>{{ $detail->ammount }}</td>--}}
                                                                        {{--</tr>--}}
                                                                        {{--@endforeach--}}
                                                                        {{--</table>--}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                <tbody>
                                                <tr>
                                                    <td style="padding: 18.0px;" valign="top" align="center">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="background: rgb(46,200,102);border-collapse: separate;" bgcolor="#2EC866">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" valign="middle" style="font-family: Arial;font-size: 16.0px;padding: 15.0px;color: rgb(255,255,255);">
                                                                    <a href="{{ route('ekuescola.mypayments.index') }}" title="eKuSchool" style="color: rgb(255,255,255);display: block;font-weight: bold;letter-spacing: normal;line-height: 100.0%;text-align: center;text-decoration: none;" target="_blank">
                                                                        Ver mais detalhes
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="top" style="color: rgb(96,96,96);font-family: Verdana , Geneva , sans-serif;font-size: 15.0px;line-height: 125.0%;padding: 9.0px 18.0px;text-align: left;" align="left">
                                                                    <span style="font-family: arial , helvetica neue , helvetica , sans-serif;">
                                                                        Continução de um bom dia,
                                                                        <br> A equipe da <a href="https://ekutivasolutions.com" target="_blank">eKuEscola</a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="background: rgb(239,241,243);border-bottom-width: 0;border-top-width: 0;" bgcolor="#eff1f3">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tbody>
                                    <tr>
                                        <td valign="top"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="background: rgb(248,249,250);border-bottom-width: 0;border-top-width: 0;" bgcolor="#f8f9fa">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tbody>
                                    <tr>
                                        <td valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;min-width: 100.0%;">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="top" style="color: rgb(0,0,0);font-family: Verdana , Geneva , sans-serif;font-size: 11.0px;line-height: 125.0%;padding: 9.0px 18.0px;text-align: center;" align="center">
                                                                    <br>
                                                                    <span style="color: rgb(128,128,128);"><span style="font-family: arial , helvetica neue , helvetica , sans-serif;">
                                                                            Se recebeu este e-mail por engano, agradecemos a sua eliminação sem reprodução.
                                                                            A mensagem e eventuais anexos são susceptíveis de conter informação sujeita a sigilo profissional, ao regime legal de protecção de dados pessoais, de direitos de autor ou outro, pelo que a sua divulgação depende de autorização do remetente.
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>
