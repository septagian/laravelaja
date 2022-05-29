@extends('layouts.admin')
@section('admin')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Blog
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.blog.simpan') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategori as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" placeholder="Masukan Judul Blog" name="judul">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Masukan content disini"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection