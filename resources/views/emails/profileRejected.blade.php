@component('mail::message')

Hola {{ $user->name }},<br><br>



No tan buenas noticias, tu perfil <a href="{{ route('profile.show', ['username' => $user->profile->username]) }}">{{ $user->profile->handle }}</a> Ha sido rechazado.<br>

Si tiene alguna pregunta al respecto, comuníquese con nuestro soporte en::<br>
{{ env('SENDING_EMAIL') }}<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent