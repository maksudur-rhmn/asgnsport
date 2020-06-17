@component('mail::message')
# Thank you

Thank you for subscribing with Asgnsport!

@component('mail::button', ['url' => url('/blogs')])
Read our blogs
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent