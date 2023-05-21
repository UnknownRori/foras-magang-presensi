{{-- Todo : Refactor this dropdown into shared customizable component --}}
<div class="relative">
    <button class="peer flex min-w-[100px] flex-row items-center gap-2">
        {{ auth()->user()->name }}
        <span
            class="ml-auto h-0 w-0 border-l-[5px] border-r-[5px] border-t-[10px] border-l-transparent border-r-transparent border-t-black"></span>
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
