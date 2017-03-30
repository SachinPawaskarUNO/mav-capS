@component('mail::message')
# Hello,

Funds has been successfully Cancelled. Here are the details:

UID for the Cancelled Transaction: {{ $fund->fund_uid }} <br>
Amount Invested: MYR {{ $fund->fund_amount }} <br>

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_fund_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
