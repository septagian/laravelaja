@extends('layouts.admin')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        tambah Data
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.user.simpan') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">name</label>
                                <input type="text" class="form-control" placeholder="Masukan nama mu" name="name">
                            </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">email</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection