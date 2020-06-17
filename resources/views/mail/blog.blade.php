@component('mail::message')
# Latest Blog

Read our latest blog by our Author!

@component('mail::button', ['url' => url('blogs/'.$id.'/single')])
Click here to read the blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent