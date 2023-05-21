<x-shared.base>
    <x-shared.navbar />

    <main class="min-w-full">
        <div class="align-items-center flex min-h-full min-w-full justify-center px-6 py-2">
            <div class="flex w-[32vw] flex-col gap-4 self-center rounded-md border-2 border-gray-300 p-4 shadow-md">
                <h2 class="text-center text-4xl">Presensi Masuk</h2>
                <img src="{{ asset('assets/img/foras.webp') }}" class="h-32 self-center" alt="Foras">
                <span id="time" class="text-center">
                    {{--  --}}
                </span>
                <form method="post" action="{{ route('dashboard.check-in.store') }}">
                    @csrf
                    @if (session()->has('message'))
                        <x-shared.alert>
                            {{ session()->get('message') }}
                        </x-shared.alert>
                    @endif
                    <div class="text-center">
                        <input type="submit" value="{{ __('messages.attend') }}"
                            class="cursor-pointer rounded-md border-blue-400 bg-blue-500 p-2 text-white hover:bg-blue-700">
                    </div>
                </form>
            </div>
        </div>
    </main>

</x-shared.base>
