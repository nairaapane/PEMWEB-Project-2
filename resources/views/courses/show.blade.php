@extends('layout')

@section('content')
    <h1>Lihat Data Mata Kuliah</h1>
    <div>
        <strong>Kode Mata Kuliah:</strong>
        <p>{{ $course->kode_matkul }}</p>
    </div>
    <div>
        <strong>Nama Mata Kuliah:</strong>
        <p>{{ $course->nama_matkul }}</p>
    </div>
    <div>
        <strong>Bobot:</strong>
        <p>{{ $course->bobot }}</p>
    </div>
    <form action="{{ route('courses.index') }}">
        <button type="submit">Back to List</button>
    </form>

@endsection
