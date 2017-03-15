@component('mail::message')
# Hello,

The loan application has been successfully submitted for review. Here are the details:

Loan Applicant: {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} <br>
Loan Title: {{ $loan->loan_title }} <br>
Loan Amount: {{ $loan->loan_amount }} <br>
Loan Duration: {{ $loan->loan_duration }} <br>
Loan Purpose: {{ $loan->loan_purpose }} <br>

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_loan_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
