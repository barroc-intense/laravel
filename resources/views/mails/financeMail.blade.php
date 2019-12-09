@component('mail::message')
    #finance aanvraag
    leaseType_id = {{ $data->leaseType_id }}
    KVK = {{ $data->KVK }}
    appraat = {{ $data->appraat }}
    price = {{ $data->price }}
    BKR = {{ $data->BKR }}
    finance_id = {{ $data->finance_id }}
    customer_id = {{ $data->customer_id }}

@endcomponent
