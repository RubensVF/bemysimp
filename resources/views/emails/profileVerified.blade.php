@component('mail::message')

Hola {{ $user->name }},<br><br>

Buenas noticias tu perfil <a href="{{ route('profile.show', ['username' => $user->profile->username]) }}">{{ $user->profile->handle }}</a> ha sido verificado con éxito.<br>

Puede comenzar a configurar su tarifa de membresía, métodos de retiro y comenzar a recibir pagos de sus fanáticos.
<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent