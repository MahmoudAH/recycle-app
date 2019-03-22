@component('mail::message')

<h2>Welcome to the site {{$user->name}} </h2>
<br/>
Your registered email-id is {{$user->email}} , Please click on the below link to verify your email account
<br/>
The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

