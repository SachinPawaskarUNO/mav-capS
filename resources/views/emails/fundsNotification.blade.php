@component('mail::message')
# Hello,

Funds has been successfully submitted. Here are the details:

UID for the transaction: {{ $fund->fund_uid }} <br>
Amount Invested: MYR {{ $fund->fund_amount }} <br>
Investment will be confirmed once they are received.

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_fund_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


