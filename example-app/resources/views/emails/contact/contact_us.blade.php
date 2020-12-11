@component('mail::message')
# New Contact

<strong>name: </strong>
{{$data['name']}} <br>

<strong>email: </strong>
{{$data['email']}} <br>

<strong>message: </strong>
{{$data['message']}} <br>

Thanks,<br/>
{{ config('app.name') }}
@endcomponent
