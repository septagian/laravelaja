@extends('layouts.admin')
@section('admin')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                     Tambah User 
                     <div class="float-end">
                         <a href="{{ Route('admin.user.create') }}"class="btn btn-sm btn-primary">tambah data</a>
                     </div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-nowrap table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                
                                <td>
                                    <a href="{{ Route('admin.user.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ Route('admin.user.delete', $row->id) }}" class="btn btn-warning">Hapus</a>
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
