@component('mail::message')

Hi {{ $notifiable->name }},<br>

Su pago de {{ opt('payment-settings.currency_symbol') .  $invoice->amount }} para la suscripción a <a href="{{ route('profile.show', ['username' => $invoice->subscription->creator->profile->username]) }}">{{ $invoice->subscription->creator->profile->handle }}</a> requiere su revisión manual por parte de su banco.

<br>

<a href="{{ $invoice->invoice_url }}">
    Revisar pago
</a>

<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent