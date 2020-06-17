@component('mail::message')
# Latest News

Read our latest news by our Author!

@component('mail::button', ['url' => url('news/'.$id.'/single')])
Click here to read the news
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent