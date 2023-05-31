<x-mail::message>
# New Contact Lead  From: {{$name}}

{{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
