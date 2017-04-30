@component('mail::message')
#Hello,

   {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} had Sucessfully initiated transaction to withdraw the funds. <br>
    UID for the transaction is {{$withdraw-> withdraw_uid }} <br>
    Amount withdrawn is {{$withdraw-> withdraw_amount }}<br>

@component('mail::button', ['url' => URL::to('/login'), 'id' => 'btn_WithdrawEmail_notify'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
