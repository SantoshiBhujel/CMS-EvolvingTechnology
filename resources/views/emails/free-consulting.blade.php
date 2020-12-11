@component('mail::message')
Hello Admin

{{ $message->message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ $message->name }}
@endcomponent
