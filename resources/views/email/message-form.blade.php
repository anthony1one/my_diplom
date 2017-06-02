@component('mail::message')
# Имя:<br>
{{ $content['name'] }}
<br>

# Email:<br>
{{ $content['email'] }}
<br>

# Телефон:<br>
{{ $content['phone'] }}
<br>

# Письмо:<br>
{{ $content['message'] }}
@endcomponent


