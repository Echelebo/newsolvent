@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
           <img src="https://logo.solventgroups.com/logo-1.png" width="170px" height="70px" />
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            {{ config('app.name') }} is committed to providing a website accessible to the widest possible audience by ADA standards and guidelines.
        @endcomponent
    @endslot
@endcomponent
