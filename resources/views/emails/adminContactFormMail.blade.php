@component('mail::message')

Hola Admin,<br>

<strong>{{ $name }}</strong> acaba de enviarle un mensaje a través del formulario de contacto de su sitio:: <br>
<br>

<strong>Email:</strong> {{ $email }}<br>
<strong>Subject:</strong> {{ $subject }}<br>
<strong>Message: </strong><br>
{{ $message }}

<br>
<strong>IP Address: </strong> {{ request()->ip() }}

<br><br>

Regards,<br>
{{ env('APP_NAME') }}

@endcomponent