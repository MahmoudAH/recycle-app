@component('mail::message')
<strong>new order from:</strong>
The body of your message.
@component('mail::button', ['url' => ''])

{{$orderCity}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
