@if (!empty($value))
    <table class="m-2 w-[100%] rounded-md border-2 border-blue-300 p-2">
        <thead class="border-2 border-blue-500">
            <tr class="divide-x-2 divide-y-2 divide-blue-500 bg-blue-600 text-white">
                <th>#</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody class="border-2 border-blue-300">
            @foreach ($value as $data)
                <tr class="{{ $loop->even ? 'bg-blue-200' : '' }} border-2 border-blue-300">
                    <td class="border-2 border-blue-400 text-center">{{ $data->id }}</td>
                    <td class="border-2 border-blue-400">{{ $data->user->name }}</td>
                    <td class="border-2 border-blue-400">{{ $data->attendance }}</td>
                    <td class="border-2 border-blue-400">{{ $data->attendance_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="flex h-[80vh] w-full items-center justify-center">
        <h2 class="text-center text-3xl">Tidak ada data yang bisa ditampilkan</h2>
    </div>
@endif
