@component('mail::message')
# Hello,

{{ $message }}

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_reviewapp_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


