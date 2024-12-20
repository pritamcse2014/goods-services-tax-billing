@component('mail::message')
    Hi, {{ $user->name }}
    <br />
    Your Password : <b>{{ $randomPassword }}</b>
    <br />
    Thank You....
@endcomponent