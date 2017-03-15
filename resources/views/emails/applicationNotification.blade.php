@component('mail::message')
# Hello {{ $user->first_name }},

We have successfully received your application. Please allow 3-5 business days to process your application.<br>
We will send you a confirmation after you application has been processed.

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_email_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
