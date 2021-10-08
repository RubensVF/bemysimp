@component('mail::message')

Hola <em><strong>{{ $notifiable->name }}</strong></em>,<br>

Felicidades, <br>

<strong>{{ $subscriber->name }}</strong> ¡acaba de suscribirse a su contenido premium!<br>

Verificar <a href="{{ route('profile.show', ['username' => $subscriber->profile->username]) }}">
{{ $subscriber->profile->handle }}</a> perfil

<br>

<a href="{{ route('mySubscribers') }}">
    Ver mis suscriptores
</a>

<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent