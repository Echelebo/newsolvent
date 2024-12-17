<tr>
    <td class="header" style="margin: 2px auto; background-color: #d4e6f5; font-size: 14px; font-family: arial;">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
