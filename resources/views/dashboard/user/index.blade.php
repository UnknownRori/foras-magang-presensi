<x-shared.base>

    <x-shared.navbar />

    <x-shared.container>
        <x-shared.auto-alert />
        <div class="flex min-w-full flex-row-reverse">
            <a href="{{ route('dashboard.users.create') }}"
                class="rounded-md border-2 border-blue-500 bg-blue-600 p-1 text-white">Tambah User</a>
        </div>
        @if (!empty($users))
            <table class="m-2 w-[100%] rounded-md border-2 border-blue-300 p-2">
                <thead class="border-2 border-blue-500">
                    <tr class="divide-x-2 divide-y-2 divide-blue-500 bg-blue-600 text-white">
                        <td class="text-center">#</td>
                        <td>Nama</td>
                        <td>Tipe</td>
                        <td>Tanggal Registrasi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody class="border-2 border-blue-300">
                    @foreach ($users as $user)
                        <tr class="{{ $loop->even ? 'bg-blue-200' : '' }} border-2 border-blue-300">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->admin ? 'Admin' : 'Magang' }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                {{-- Todo : Refactor this dropdown into shared customizable component --}}
                                <div class="relative">
                                    <button
                                        class="peer m-1 flex flex-row items-center gap-2 rounded-md border-2 border-blue-500 bg-blue-600 p-1 text-white">
                                        Aksi
                                        <span
                                            class="h-0 w-0 border-l-[5px] border-r-[5px] border-t-[10px] border-l-transparent border-r-transparent border-t-white"></span>
                                    </button>
                                    <div
                                        class="invisible absolute z-10 w-[100%] rounded-sm border-2 border-gray-100 bg-gray-50 p-2 shadow-sm hover:visible peer-focus:visible">
                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <form action="{{ route('dashboard.users.destroy', $user->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="submit" value="Hapus"
                                                        class="cursor-pointer text-red-600">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="flex h-[80vh] w-full items-center justify-center">
                <h2 class="text-center text-3xl">Tidak ada data yang bisa ditampilkan</h2>
            </div>
        @endif
    </x-shared.container>

</x-shared.base>
