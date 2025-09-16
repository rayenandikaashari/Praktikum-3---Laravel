@extends('app')

@section('content')
<h1>Welcome to the buku page</h1>
<div><a href="/tambahbuku"><button>Tambah Buku</button></a></div>
<table border="1">
    <thread>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
        <tbody>
            @foreach($data as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->penerbit }}</td>
            </tr>          
            @endforeach
        <tbody>
    </thread>
@endsection