@component('mail::message')
# Hello,

{{ $message }}
<br>
Here are the details:

Loan Title: {{ $loan->loan_title }} <br>
Loan Amount: MYR {{ $loan->loan_amount }} <br>
Loan Duration: {{ $loan->loan_duration }} <br>
Please contact CapSphere for further details.


@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_reviewfunds_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent