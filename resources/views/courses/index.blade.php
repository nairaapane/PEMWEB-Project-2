@extends('layout')

@section('content')
    <h1>Data Mata Kuliah</h1>
    <form action="{{ route('courses.create') }}">
        <button type="submit">Add Mata Kuliah</button>
    </form>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table border="1">  <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->kode_matkul }}</td>
                    <td>{{ $course->nama_matkul }}</td>
                    <td>{{ $course->bobot}}</td>
                    <td>
                        <form action="{{ route('courses.show', $course->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Lihat</button>
                        </form>
                        <form action="{{ route('courses.edit', $course->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Ubah</button>
                        </form>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDeletion(event);">
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
