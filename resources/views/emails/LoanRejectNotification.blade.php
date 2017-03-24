@component('mail::message')
# Hello,

You had rejected the loan from CapSphere.

Loan Applicant: {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} <br>
Loan Title: {{ $loan->loan_title }} <br>
Loan Amount: {{ $loan->loan_amount }} <br>
Loan Duration: {{ $loan->loan_duration }} <br>
Loan Purpose: {{ $loan->loan_purpose }} <br>

Please contact CapSphere for further details.


@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_BOLoanApprove_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent