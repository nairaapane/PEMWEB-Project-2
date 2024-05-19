@extends('layout')

@section('content')
    <h1>Lihat Data Dosen</h1>
    <div>
        <strong>NIP:</strong>
        <p>{{ $dosen->nid }}</p>
    </div>
    <div>
        <strong>Nama:</strong>
        <p>{{ $dosen->nama }}</p>
    </div>
    <div>
        <strong>Departemen:</strong>
        <p>{{ $dosen->departemen }}</p>
    </div>
    <form action="{{ route('dosens.index') }}">
        <button type="submit">Back to List</button>
    </form>

@endsection
