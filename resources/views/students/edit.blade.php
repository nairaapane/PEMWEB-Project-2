@extends('layout')

@section('content')
    <h1>Edit Data Mahasiswa</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="{{ $student->nim }}" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $student->nama }}" required>
        </div>
        <div>
            <label for="program_studi">Program Studi:</label>
            <input type="text" id="program_studi" name="program_studi" value="{{ $student->program_studi }}" required>
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection
