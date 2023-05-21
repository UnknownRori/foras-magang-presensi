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
                        <x-shared.navbar-link :href="route('dashboard.check-in.index')">Users</x-shared.navbar-link>
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
                        <x-shared.navbar-link :href="route('dashboard.check-in.create')">Check In</x-shared.navbar-link>
                    </li>
                    <li>
                        <x-shared.navbar-link :href="route('dashboard.check-out.create')">Check Out</x-shared.navbar-link>
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
