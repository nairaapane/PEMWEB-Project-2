@extends('layout')

@section('content')
    <h1>Add Mata Kuliah</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div>
            <label for="kode_matkul">Kode Mata Kuliah:</label>
            <input type="text" id="kode_matkul" name="kode_matkul" required>
        </div>
        <div>
            <label for="nama_matkul">Nama Mata Kuliah:</label>
            <input type="text" id="nama_matkul" name="nama_matkul" required>
        </div>
        <div>
            <label for="bobot">Bobot:</label>
            <input type="text" id="bobot" name="bobot" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
