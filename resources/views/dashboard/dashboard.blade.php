<x-shared.base>
    <x-shared.navbar />

    <main class="m-auto w-[95%]">
        <h2 class="text-xl">
            Selamat datang <span class="font-bold">{{ auth()->user()->name }}</span>
        </h2>
    </main>

</x-shared.base>
