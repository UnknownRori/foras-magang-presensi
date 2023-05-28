{{-- Todo : Refactor this dropdown into shared customizable component --}}
<div class="relative">
    <button class="peer flex min-w-[100px] flex-row items-center gap-2">
        <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        {{ auth()->user()->name }}
        <svg class="h-8 w-8 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </button>
    <div
        class="invisible absolute z-10 w-[100%] rounded-sm border-2 border-gray-100 bg-gray-50 p-2 shadow-sm hover:visible peer-focus:visible">
        <ul class="flex flex-col gap-2">
            <li>
                <a href="{{ route('dashboard.profile.edit') }}">Edit Profile</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" value="Logout" class="cursor-pointer text-red-600">
                </form>
            </li>
        </ul>
    </div>
</div>
