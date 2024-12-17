@component('mail::message')
    # Hi {{ $demo->name }},

    We wish to inform you that your Online Banking Registration Profile has been created successfully and your login details
    have been kept confidential and secured. Have a nice banking experience.
    <p style="background-color: #6A3433; color: #ffffff;">BELOW ARE YOUR BANKING DETAILS</p>
    Email Address: {{ $demo->email }}
    Account Number: {{ $demo->acct }}

    Thanks,
    {{ $demo->sender }}.
@endcomponent
