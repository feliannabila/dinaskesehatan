@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3 justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Pengguna</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama Puskesmas</label>
                        <div class="">
                            <input type="text" class="form-control" name="name" placeholder="Nama Puskesmas"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="">
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                value="{{ old('username') }}">
                        </div>
                        @error('username')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="">
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon</label>
                        <div class="">
                            <input type="text" class="form-control" name="phone_number" placeholder="Nomor Telepon"
                                value="{{ old('phone_number') }}">
                        </div>
                        @error('phone')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <div class="">

                            <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
                        </div>
                        @error('address')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <div class="">
                            <input type="password" class="form-control" name="password" placeholder="Kata sandi"
                                value="{{ old('password') }}">
                        </div>
                        @error('password')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="picture">Example file input</label>
                        <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                      </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection