@component('mail::message')
Welcome!

Hi {{$user->name}}!
<br>
Welcome to CourseCast, your account has been created successfully!

@component('mail::button', ['url' => route('login')])
Get Started
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
