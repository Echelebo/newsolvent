@component('mail::message')
    # Hi {{ $demo->name }},

    We wish to inform you that your Online Banking Registration Profile has been created successfully and your login details
    have been kept confidential and secured. Have a nice banking experience.

    # <span style="color: {{ $textColor }}">BELOW ARE YOUR BANKING DETAILS</span>

    Email Address: {{ $demo->email }}
    Account Number: {{ $demo->acct }}

    Thanks,
    {{ $demo->sender }}.
@endcomponent
