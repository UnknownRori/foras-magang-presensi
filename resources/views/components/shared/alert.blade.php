@if ($type == 'error')
    <div class="my-2 rounded-md border-2 border-red-400 bg-red-500 p-2 text-white">
        {{ $slot }}
    </div>
@elseif ($type == 'success')
    <div class="my-2 rounded-md border-2 border-green-400 bg-green-500 p-2 text-white">
        {{ $slot }}
    </div>
@endif
