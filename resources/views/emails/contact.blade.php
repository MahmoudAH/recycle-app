@component('mail::message')
 <srtong> anew ontact request from</srtong>
 {{$request->name}}

{{$request->message}}
@component('mail::button', ['url' => ''])

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
