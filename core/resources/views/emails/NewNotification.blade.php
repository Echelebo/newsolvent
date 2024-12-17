@component('mail::message')
    # Hi {{ $demo->name }},

    {!! $demo->message !!}

    Thanks,
    {{ $demo->sender }}.
@endcomponent
