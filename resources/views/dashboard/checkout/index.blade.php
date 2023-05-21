<x-shared.base>
    <x-shared.navbar />

    <main class="m-auto w-[95%]">
        <x-check-in-out.table :value='$checkout->items()' />
        <div>
            {{ $checkout->onEachSide(5)->links() }}
        </div>
    </main>

</x-shared.base>
