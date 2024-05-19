@extends('layout')

@section('content')
    <h1>Add Mahasiswa</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="program_studi">Program Studi:</label>
            <input type="text" id="program_studi" name="program_studi" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
