@component('mail::message')
# Hello,

The investment has been processed successfully.<br><br>

Investment and Loan Details are: <br>

Loan Applicant: {{ $boapp->first_name }} {{ $boapp->middle_name }} {{ $boapp->last_name }} <br>
Loan Title: {{ $loan->loan_title }} <br>
Loan Amount: MYR {{ $loan->loan_amount }} <br>
Loan Duration: {{ $loan->loan_duration }} <br>
Loan Purpose: {{ $loan->loan_purpose }} <br>
Loan Interest: {{$loan->loan_interest_rate}} % <br><br>
Invested by: {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} <br>
Invested Amount: MYR {{ $amount }} <br>

Please contact CapSphere for further details.

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_investment_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
