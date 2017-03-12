@component('mail::message')
# Hello {{ $user->first_name }},

Click on the below button to verify your email address.

@component('mail::button', ['url' => URL::to('register/verify/'.$user->email_token)])
Verify my email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent