<x-shared.base>
    <div class="absolute z-10 flex w-[100%] flex-row-reverse px-6 py-2">
        <div class="flex flex-row-reverse">
            <a href="{{ route('login') }}" class="md:text-md flex text-center text-gray-500 hover:text-gray-700 lg:text-lg">Login</a>
        </div>
    </div>

    <div class="relative flex min-h-[100%] flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div
            class="absolute inset-0 bg-[url({{ asset('assets/img/grid.svg') }})] bg-center bg-repeat [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]">
        </div>

        <div
            class="relative w-[60rem] bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-5xl sm:rounded-lg sm:px-10">
            <div class="mx-auto">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/foras.webp') }}" class="h-48 rounded-full" alt="Tailwind Play" />
                </div>
                <div class="divide-y divide-gray-300/50">
                    <div class="space-y-6 py-8 text-base leading-7 text-gray-600">
                        <h3 align="center" class="text-3xl">Sistem Presensi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-shared.base>
