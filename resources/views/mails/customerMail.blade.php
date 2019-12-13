@component('mail::message')
    #welkom {{ $data->name }},
    de inlog gegevens van uw klant account zijn:
    - email: {{ $data->email }}
    - naam: {{ $data->name }}
    - wachtwoord: {{ $data->password }}
@endcomponent
