<x-shared.base>

    <x-shared.navbar />

    <x-shared.container>
        <h2 class="text-center text-2xl">Tambah User</h2>
        <form action="{{ route('dashboard.users.store') }}" method="post"
            class="flex flex-col gap-4 rounded-md bg-slate-50 p-4 shadow-md">
            @csrf
            <x-shared.inputform :value="old('name')" id="name" type="text" placeholder="Masukan nama user"
                msg="Nama harus di-isi dan lebih dari 4" />
            <x-shared.inputform id="password" type="password" placeholder="Masukan password user"
                msg="Password minimal 4 karakter" />
            <x-shared.inputform id="password_confirmation" title="Konfirmasi Password" type="password"
                placeholder="Konfirmasi password user" msg="Password minimal 4 karakter" />

            <x-shared.auto-alert />
            <div>
                <input type="submit" value="Tambah"
                    class="cursor-pointer rounded-md border-blue-400 bg-blue-500 p-2 text-white hover:bg-blue-700">
            </div>
        </form>
    </x-shared.container>

</x-shared.base>
