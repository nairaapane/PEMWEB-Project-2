@extends('layout')

@section('content')
    <h1>Data Mahasiswa</h1>
    <form action="{{ route('students.create') }}">
        <button type="submit">Add Mahasiswa</button>
    </form>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table border="1">  <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->program_studi }}</td>
                    <td>
                        <form action="{{ route('students.show', $student->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Lihat</button>
                        </form>
                        <form action="{{ route('students.edit', $student->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Ubah</button>
                        </form>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDeletion(event);">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('home') }}">
        <button type="submit">Back to Home</button>
    </form>
    <script>
        function confirmDeletion(event) {
            if (!confirm('Are you sure you want to delete this data?')) {
                event.preventDefault(); 
            }
        }
    </script>
@endsection