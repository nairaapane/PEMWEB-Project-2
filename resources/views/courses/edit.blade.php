@extends('layout')

@section('content')
    <h1>Edit Data Mata Kuliah</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="kode_matkul">Kode Mata Kuliah:</label>
            <input type="text" id="kode_matkul" name="kode_matkul" value="{{ $course->kode_matkul }}" required>
        </div>
        <div>
            <label for="nama_matkul">Nama Mata Kuliah:</label>
            <input type="text" id="nama_matkul" name="nama_matkul" value="{{ $course->nama_matkul }}" required>
        </div>
        <div>
            <label for="bobot">Bobot:</label>
            <input type="text" id="bobot" name="bobot" value="{{ $course->bobot }}" required>
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection
