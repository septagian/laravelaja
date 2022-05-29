@extends('layouts.admin')
@section('admin')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Kelola Blog

                        <div class="float-end">
                            <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gian as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->Category->name }}</td>
                                    <td>
                                        <a href="{{ route('post.show', $row->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                        <a href="{{ route('admin.blog.edit', $row->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('admin.blog.delete', $row->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection