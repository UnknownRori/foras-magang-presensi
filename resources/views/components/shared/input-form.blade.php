<div class="flex flex-col gap-2">
    <label for="{{ $id }}" class="text-slate-800">{{ isset($title) ? $title : str($id)->ucfirst() }}</label>
    <input type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" placeholder="{{ $placeholder }}"
        class="rounded-md border-2 border-gray-400 p-2" value="{{ $value }}"
        {{ $isNotRequired ? '' : 'required' }}>
    @if ($attributes->has('msg'))
        @error($id)
            <x-shared.alert>
                {{ $attributes->get('msg') }}
            </x-shared.alert>
        @enderror
    @else
        @error($id)
            <x-shared.alert>
                {{ $errors->first($id) }}
            </x-shared.alert>
        @enderror
    @endif
</div>
