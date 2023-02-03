@component('mail::message')
# Dear {{$checkout->User->name}},

<br>
I wanted to take a moment to express my sincere gratitude for your prompt payment of the <strong>{{$checkout->Camp->title}}</strong>. Your prompt action has made it possible for me to continue delivering quality educational content to my students.
<br> <br>
Your support means a lot to me and I am grateful for having such a responsible and committed participant in my course. I am confident that the knowledge and skills you will gain from this program will be beneficial in your personal and professional life.
<br>

@component('mail::button', ['url' => route('dashboard')])
Start Learning
@endcomponent

Thank you again for your payment. If there is anything else I can do for you, please do not hesitate to let me know.
<br>

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
