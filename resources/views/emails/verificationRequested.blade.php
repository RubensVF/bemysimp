@component('mail::message')

Hola Admin,<br>

<strong>{{ $user->name }}</strong> simplemente cargó todo lo necesario y solicitó su verificación para que puedan comenzar a ganar en su gran plataforma.

<br>

<a href="{{ route('admin-pvf') }}">
    Ver solicitudes de verificación
</a>

<br><br>

Saludos,<br>
{{ env('APP_NAME') }}

@endcomponent