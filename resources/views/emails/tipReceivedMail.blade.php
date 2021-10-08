@component('mail::message')

Hola <em><strong>{{ $notifiable->name }}</strong></em>,<br>

Felicidades, <br>

<strong>{{ $tip->tipper->name }} - <a href="{{  route('profile.show', ['username' => $tip->tipper->profile->username]) }}">{{ $tip->tipper->profile->handle }}</a></strong> te acabo de dar propina {{ opt('payment-settings.currency_symbol') . $tip->creator_amount }} para tu publicación 
<a href="{{ route('single-post', ['post' => $tip->post_id]) }}">
    {{ route('single-post', ['post' => $tip->post_id]) }}
</a>

<br>

<br>

<a href="{{ route('myTips') }}">
    Ver mis propinas
</a>

<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent