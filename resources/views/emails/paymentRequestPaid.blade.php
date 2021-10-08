@component('mail::message')

Hola {{ $withdraw->user->name }},<br><br>

Buenas noticias, su solicitud de pago de {{ opt('payment-settings.currency_symbol') .  $withdraw->amount }} Fue procesado<br>
Si puede demorar hasta 5 días hábiles en aparecer en su cuenta, dependiendo de su método de pago.
<br><br>

<strong>Pasarela de pago</strong>:<br>
{{ $withdraw->user->profile->payout_gateway }}
<br>
<strong>Detalles de pago</strong>:<br>
{{-- please note, escaped using "e()" laravel function --}}
{!! nl2br(e($withdraw->user->profile->payout_details)) !!}

<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent