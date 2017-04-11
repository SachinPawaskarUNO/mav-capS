@component('mail::message')
# Hello,

Loan has been Disbursed.<br><br>

Disbursed Loan Details are: <br>

Loan Applicant: {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} <br>
Bank Name: {{$boapp->bo_bank_name}}<br>
Bank Account Number: {{$boapp->bo_bank_account}}<br>
UID: {{$disbursement-> disbursement_uid }}<br>
Loan Title: {{ $loan->loan_title }} <br>
Loan Amount: MYR {{ $loan->loan_amount }} <br>


@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_BOLoanDisbursedMail_notify'])
Login to my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
