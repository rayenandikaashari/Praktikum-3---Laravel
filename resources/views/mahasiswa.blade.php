@extends('app')

@section('content')
<h1>Welcome to the mahasiswa page</h1>
<div><a href="/tambahmahasiswa"><button>Tambah mahasiswa</button></a></div>
<table border="1">
    <thread>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
        </tr>
        <tbody>
            @foreach($data as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->npm }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>          
            @endforeach
        <tbody>
    </thread>
@endsection