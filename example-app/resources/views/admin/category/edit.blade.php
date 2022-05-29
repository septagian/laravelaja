@extends('layouts.admin')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="card">
                    <div class="card-header">
                        Edit_Category
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ Route('admin.category.update', $edit->id ) }}">
                            @method("PUT")
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">name</label>
                                <input type="text" class="form-control" placeholder="Masukan nama mu" name="name" value="{{  $edit->name }}">
                            </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">category</label>
                                  <input type="text" class="form-control" name="slug" value="{{ $edit->slug  }}" >
                                </div>
                                <button type="submit" class="btn btn-primary">store</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection