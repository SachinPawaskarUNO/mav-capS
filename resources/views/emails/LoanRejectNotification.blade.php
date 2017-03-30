@component('mail::message')
# Hello,

Loan has been Rejected.<br><br>

Rejected Loan Details are: <br>

Loan Applicant: {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} <br>
Loan Title: {{ $loan->loan_title }} <br>
Loan Amount: MYR {{ $loan->loan_amount }} <br>
Loan Duration: {{ $loan->loan_duration }} <br>
Loan Purpose: {{ $loan->loan_purpose }} <br>
Loan Interest: {{$loan->loan_interest_rate}} % <br>
@if ($loan->loan_funded_percent)
    Loan Funded Percent: {{$loan->loan_funded_percent}} %<br>
@endif


Please contact CapSphere for further details.


@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_BOLoanApprove_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent