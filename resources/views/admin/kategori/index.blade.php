@extends('layouts.admin')
@section('content')
<div class="row justify-content-between">
    <div class="col-6 col-lg-6 col-md-6">
        <h3>Data Kategori</h3>
    </div>
    <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kategori">
            <i class="bi bi-person-plus-fill"></i> Tambah
        </button>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table class="table" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $key => $k)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $k->kode }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kategoriUpdate{{ $k->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kategoriDelete{{ $k->id }}">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('admin.kategori.create')
@include('admin.kategori.edit')
@include('admin.kategori.delete')
@endsection
