@component('mail::message')

Hola Admin,<br>

Una nueva solicitud de pago de {{ opt('payment-settings.currency_symbol') .  $withdraw->amount }} was created by {{ $withdraw->user->name }} <a href="{{ route('profile.show', ['username' => $withdraw->user->profile->username]) }}">{{ $withdraw->user->profile->handle }}</a>

<br>

<a href="{{ route('admin.payment-requests') }}">
    Ver solicitudes de pago
</a>

<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent