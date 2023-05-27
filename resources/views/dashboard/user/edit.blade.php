<x-shared.base>

    <x-shared.navbar />

    <x-shared.container>
        <h2 class="text-center text-2xl">Edit Profil User</h2>
        <form action="{{ route('dashboard.profile.update') }}" method="post"
            class="flex flex-col gap-4 rounded-md bg-slate-50 p-4 shadow-md">
            @csrf
            @method('patch')
            <x-shared.inputform :value="auth()->user()->name" id="name" type="text" placeholder="Masukan nama user"
                msg="Nama harus di-isi dan lebih dari 4" />
            <x-shared.inputform id="old-password" title="Password Lama" type="password"
                placeholder="Masukan password lama" msg="Password Wajib di-isi" />
            @admin
                <select name="role" id="role">
                    <option value="Admin">Admin</option>
                    <option value="NonAdmin">NonAdmin</option>
                </select>
            @endadmin
            <x-shared.inputform id="password" type="password" placeholder="Masukan password baru user"
                msg="Password minimal 4 karakter" title="Password Baru" :isNotRequired='true' />
            <x-shared.inputform id="password_confirmation" title="Konfirmasi Password Baru" type="password"
                placeholder="Konfirmasi password baru user" msg="Password minimal 4 karakter" :isNotRequired='true' />

            <x-shared.auto-alert />
            <div>
                <input type="submit" value="Update"
                    class="cursor-pointer rounded-md border-blue-400 bg-blue-500 p-2 text-white hover:bg-blue-700">
            </div>
        </form>
    </x-shared.container>

</x-shared.base>
