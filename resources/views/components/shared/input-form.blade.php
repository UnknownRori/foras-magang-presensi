<div class="flex flex-col gap-2">
    <label for="{{ $id }}" class="text-slate-800">{{ str($id)->ucfirst() }}</label>
    <input type="{{ $type }}" name="{{ $id }}"
    id="{{ $id }}" placeholder="{{ $placeholder }}"
    class="border-gray-400 p-2 border-2 rounded-md"
    >
</div>
