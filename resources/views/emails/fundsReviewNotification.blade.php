@component('mail::message')
# Hello,

{{ $message }}
<br>
Here are the details:

UID for the transaction: {{ $fund->fund_uid }} <br>
Amount Added: MYR {{ $fund->fund_amount }} <br>
Amount Deposited: MYR {{ $fund->fund_verified_amount }}<br>
Please contact CapSphere for further details.


@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_reviewfunds_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent