@component('mail::message')
# Latest Query

Name : {{ $name }}    <br>
Email : {{ $email }}   <br>
Phone : {{ $phone }}   <br>
Message : {{ $message }}   <br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent