@extends('layout')

@section('content')
    <h1>Data Dosen</h1>
    <form action="{{ route('dosens.create') }}">
        <button type="submit">Add Dosen</button>
    </form>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table border="1">  <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->nid }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->departemen}}</td>
                    <td>
                        <form action="{{ route('dosens.show', $dosen->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Lihat</button>
                        </form>
                        <form action="{{ route('dosens.edit', $dosen->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Ubah</button>
                        </form>
                        <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDeletion(event);">
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
