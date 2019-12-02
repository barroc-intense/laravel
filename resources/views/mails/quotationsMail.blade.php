@component('mail::message')
    #nieuwe prijsopgave
    type apparaat: {{ $data->type }}

    email: {{ $data->email }}

    bedrijfs naam: {{ $data->company }}

    kvk: {{ $data->kvk }}
@endcomponent