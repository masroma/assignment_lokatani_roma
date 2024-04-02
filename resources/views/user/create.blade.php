@extends('layouts.default')
@section("title") Tambah User @endsection
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-5">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Tambah</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a>
                        </li>
                        
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('users.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                               
                                <div class="form-group mt-3">
                                    <label for="nama_kategori">Nama Lengkap</label>
                                    <input type="text" name="name"
                                        class="form-control  @error('name') is-invalid @enderror"
                                        placeholder="Nama Lengkap" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="agent">Email</label>
                                    <input type="text" name="email"
                                        class="form-control  @error('email') is-invalid @enderror"
                                        placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="agent">Password</label>
                                    <input type="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror"
                                        placeholder="Password" value="{{ old('password') }}">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nama_kategori">Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control  @error('phone') is-invalid @enderror"
                                        placeholder="Phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="nama_kategori">Address</label>
                                    <textarea name="address"class="form-control  @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                   
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                               
                          
                               <div class="form-group mt-3">
                                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
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