@extends('layout.form_view')
@section('title')
    Data Service
@endsection
@section('link')
<span>
    <a class="btn btn-primary" role="button" href="{{route('barang.create')}}">Tambah Service</a>
    <a class="btn btn-success" role="button" href="{{url('cetak')}}">Cetak Service</a>
</span>
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
    @foreach ($services as $item)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$item->barang->kode}}</td>
    <td>{{$item->barang->nama}}</td>
    <td>{{$item->biaya}}</td>
    <td>{{$item->onkos}}</td>
    <td>{{$item->kerusakan}}</td>
    <td>{{$item->barang->perbikan}}</td>
    <td>{{$item->barang->image}}</td>
    <td><a class="btn btn-warning" role="button" href="{{ route('detail.edit', $item->id) }}">Edit</a>| 
        <a onclick="document.getElementById('hapus-{{ $item->id }}').submit()" style="color: #ff0000; cursor: pointer;">
            <button type="button" class="btn btn-danger">
                <i class="bi bi-trash2"></i>
            </button>
        </a>
        <form action="{{ route('detail.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="delete">
        </form>
    </tr>
    @endforeach    
@endsection
