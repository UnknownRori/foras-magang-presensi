<x-shared.base>
    <div class="align-items-center flex min-h-full min-w-full justify-center px-6 py-2">
        <div class="flex w-[32vw] flex-col gap-2 self-center rounded-md border-2 border-gray-300 p-4 shadow-md">
            <img src="{{ asset('assets/img/foras.webp') }}" class="h-32 self-center" alt="Foras">
            <form action="{{ route('post-login') }}" class="flex flex-col gap-4" method="post">
                @csrf
                <x-shared.inputform :value="old('name')" id="name" type="text" placeholder="Masukan nama anda"
                    msg="Nama harus di-isi dan lebih dari 4" />
                <x-shared.inputform id="password" type="password" placeholder="Masukan password anda"
                    msg="Password harap di-isi" />
                @if (session()->has('message'))
                    <x-shared.alert>
                        {{ session()->get('message') }}
                    </x-shared.alert>
                @endif
                <div>
                    <input type="submit" value="Login"
                        class="cursor-pointer rounded-md border-blue-400 bg-blue-500 p-2 text-white hover:bg-blue-700">
                </div>
            </form>
        </div>
    </div>
</x-shared.base>
