@extends('layout')

@section('content')
<div class="container">
    <h1>Data Akademik Kampus</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Data Mahasiswa</th>
                <td>
                    <form action="{{ route('students.index') }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Lihat Data</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Data Dosen</th>
                <td>
                    <form action="{{ route('dosens.index') }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Lihat Data</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Data Mata Kuliah</th>
                <td>
                    <form action="{{ route('courses.index') }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Lihat Data</button>
                    </form>
                </td>
            </tr>
        </thead>
    </table>
    <div style="margin-top: 20px;">
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection
