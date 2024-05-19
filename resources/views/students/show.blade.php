@extends('layout')

@section('content')
    <h1>Lihat Data Mahasiswa</h1>
    <div>
        <strong>NIM:</strong>
        <p>{{ $student->nim }}</p>
    </div>
    <div>
        <strong>Nama:</strong>
        <p>{{ $student->nama }}</p>
    </div>
    <div>
        <strong>Program Studi:</strong>
        <p>{{ $student->program_studi }}</p>
    </div>
    <form action="{{ route('students.index') }}">
        <button type="submit">Back to List</button>
    </form>

@endsection
