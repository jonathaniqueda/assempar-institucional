<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Solicitação de contato - {{ env('APP_NAME') }}</title>
</head>
<body>
<div>
    <p>Olá {{ env('APP_NAME') }},</p>

    <p>O(a) {{ $data['name'] }} enviou uma mensagem de contato.</p>
    <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
    <p><strong>Telefone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Mensagem:</strong> {{ $data['msg'] }}</p>

    <p>Att, Portal {{ env('APP_NAME') }}.</p>
</div>
</body>
</html>