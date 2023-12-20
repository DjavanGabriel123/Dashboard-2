<x-mail::message>
# Parabéns você recebeu um novo Lead!

<p>
    Nome: {{ $data['name'] }}<br>
    Telefone {{ $data['tel'] }}<br>
    E-mail {{ $email['email'] }}<br>
</p>

<x-mail::button :url="'https://fsnshop.com.br'">
Acesse o site clicando aqui
</x-mail::button>

{{ date('d/m/Y') }}<br>
{{ config('app.name') }}
</x-mail::message>
