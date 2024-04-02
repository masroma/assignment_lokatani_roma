@extends('layouts.default')
@section("title") Edit User @endsection
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 mt-5">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Edit</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a>
                    </li>
                    
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                               
                                <div class="form-group mt-3">
                                    <label for="nama_kategori">Nama Lengkap</label>
                                    <p>{{$user->name}}</p>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="agent">Email</label>
                                   <p>{{$user->email}}</p>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="nama_kategori">Phone</label>
                                    <p>{{$user->phone}}</p>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="nama_kategori">Address</label>
                                    <p>{{$user->address}}</p>
                                </div>
                              
                                <div class="form-group mt-3">
                                  
                                    <a href="{{route('users.index')}}" class="btn btn-sm btn-danger">Kembali</a>
                                   </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection