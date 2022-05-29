@extends('layouts.admin')
@section('admin')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                   <div class="card-header">
                        Category
                        <div class="float-end">
                            <a href="{{ Route('admin.category.create') }}" class="btn btn-sm btn-primary">TambahCategory</a>
                        </div>
                    </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>name</th>
                                        <th>slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kategori as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.category.edit', $row->id)  }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('admin.category.destroy', $row->id) }}" class="btn btn-danger">Hapus</a>
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