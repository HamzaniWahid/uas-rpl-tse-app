@extends('layout.form_tambah')
@section('title')
    Tambah Service
@endsection
@section('conten')
<form action="{{route('barang.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Kode Barang</label>
        <input type="text" class="form-control" required name="kode" >
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" class="form-control" required name="nama">
    </div>
    <div class="mb-3">
        <label class="form-label">Merek Barang</label>
        <input type="text" class="form-control" required name="merek">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Barang</label>
        <input type="text" class="form-control" required name="jenis">
    </div>
    <div class="mb-3">
        <label class="form-label">Kerusakan</label>
        <input type="text" class="form-control" required name="kerusakan">
    </div>
    <div class="mb-3">
        <label class="form-label">Gambar Barang</label>
        <input type="file" class="form-control" required name="image">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection