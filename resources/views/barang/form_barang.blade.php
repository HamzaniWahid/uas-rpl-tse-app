@extends('layout.form_view')
@section('title')
    Data Barang
@endsection
@section('link')
<a class="btn btn-primary" role="button" href="{{route('barang.create')}}">Tambah Barang</a>
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama</th>
        <th scope="col">Merek</th>
        <th scope="col">Jenis</th>
        <th scope="col">Kerusakan</th>
        <th scope="col">Gambar</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($barangs as $barang)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$barang->kode}}</td>
    <td>{{$barang->nama}}</td>
    <td>{{$barang->merek}}</td>
    <td>{{$barang->jenis}}</td>
    <td>{{$barang->kerusakan}}</td>
    <td>{{$barang->image}}</td>
    <td><a class="btn btn-warning" role="button" href="{{ route('barang.edit', $barang->id) }}">Edit</a>| 
        <a onclick="document.getElementById('hapus-{{ $barang->id }}').submit()" style="color: #ff0000; cursor: pointer;">
            <button type="button" class="btn btn-danger">
                <i class="bi bi-trash2"></i>
            </button>
        </a>
        <form action="{{ route('barang.destroy', $barang->id) }}" id="hapus-{{ $barang->id }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="delete">
        </form>
    </tr>
    @endforeach    
@endsection
