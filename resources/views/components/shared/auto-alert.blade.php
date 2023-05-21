@if (session()->has('message'))
    <x-shared.alert :type="session()->has('type') ? session()->get('type') : ''">
        {{ session()->get('message') }}
    </x-shared.alert>
@endif
