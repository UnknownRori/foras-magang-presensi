<nav class="mb-4 min-w-full bg-slate-50 p-2 shadow-md">
    <div class="mx-auto flex w-[95%] flex-row items-center gap-4">
        <header class="flex flex-row items-center gap-4">
            <img src="{{ asset('assets/img/foras.webp') }}" alt="Foras" class="h-10">
            <h4 class="text-xl">Foras</h4>
        </header>
        <div class="ml-auto flex w-[100%] items-center gap-4">
            <ul class="flex flex-row gap-2">
                <li>
                    <x-shared.navbar-link :href="route('dashboard.main')">Home</x-shared.navbar-link>
                </li>
                @can('admin')
                    <li>
                        <x-shared.navbar-link :href="route('dashboard.users.index')">Users</x-shared.navbar-link>
                    </li>
                    <li>
                        <x-shared.navbar-link :href="route('dashboard.check-in.index')">Check In</x-shared.navbar-link>
                    </li>
                    <li>
                        <x-shared.navbar-link :href="route('dashboard.check-out.index')">Check Out</x-shared.navbar-link>
                    </li>
                @endcan
                @can('non-admin')
                    <li>
                        {{-- Todo : Refactor this dropdown into shared customizable component --}}
                        <div class="relative">
                            <button
                                class="peer flex min-w-[100px] flex-row items-center gap-2 text-gray-500 hover:text-gray-800">
                                Presensi Masuk
                            </button>
                            <div
                                class="invisible absolute z-10 w-[100%] rounded-sm border-2 border-gray-100 bg-gray-50 p-2 shadow-sm hover:visible peer-focus:visible">
                                <ul class="flex flex-col gap-2">
                                    <li>
                                        <x-shared.navbar-link href="{{ route('dashboard.check-in.create') }}">
                                            Presensi
                                        </x-shared.navbar-link>
                                    </li>
                                    <li>
                                        <x-shared.navbar-link href="{{ route('dashboard.check-in.index') }}">
                                            Histori
                                        </x-shared.navbar-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        {{-- Todo : Refactor this dropdown into shared customizable component --}}
                        <div class="relative">
                            <button
                                class="peer flex min-w-[100px] flex-row items-center gap-2 text-gray-500 hover:text-gray-800">
                                Presensi Keluar
                            </button>
                            <div
                                class="invisible absolute z-10 w-[100%] rounded-sm border-2 border-gray-100 bg-gray-50 p-2 shadow-sm hover:visible peer-focus:visible">
                                <ul class="flex flex-col gap-2">
                                    <li>
                                        <x-shared.navbar-link href="{{ route('dashboard.check-out.create') }}">
                                            Presensi
                                        </x-shared.navbar-link>
                                    </li>
                                    <li>
                                        <x-shared.navbar-link href="{{ route('dashboard.check-out.index') }}">
                                            Histori
                                        </x-shared.navbar-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endcan
            </ul>
            <ul class="item-center ml-auto flex flex-row">
                <li class="flex flex-row">
                    <div class="relative rounded-md border-2 border-blue-100 p-1">
                        <x-shared.profile-menu />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
