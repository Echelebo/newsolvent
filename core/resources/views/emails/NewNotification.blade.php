@component('mail::message')
# Hi {{ $demo->name }},

{!! $demo->message !!}

<br>
Thanks,<br>
{{ $demo->sender }}.
@endcomponent
