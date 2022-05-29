@extends('layouts.admin')
@section('admin')
 <div class="container">
     <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    tambah category
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ Route('admin.category.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control" placeholder="Masukan nama mu" name="name">
                        </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">category</label>
                              <input type="text" class="form-control" name="slug" >
                            </div>
                            <button type="submit" class="btn btn-primary">simpan</button>
                    </form>
                </div>
            </div>
        </div>
     </div>
 </div>
@endsection
