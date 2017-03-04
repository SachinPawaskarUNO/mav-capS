@component('mail::message')
# Hello {{ $user->first_name }},

We have successfully received your application. Please allow 3-5 business days to process your application.<br>
We will send you a confirmation after you application has been processed.

@component('mail::button', ['url' => 'http://capsphere.herokuapp.com/login'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
