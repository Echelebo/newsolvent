<tr>
    <td class="header"
        style="margin-top: 3px; margin-bottom: 5px; background-color: #dbe9f5; font-size: 14px; line-height: 21px; font-family: sans-serif;">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
