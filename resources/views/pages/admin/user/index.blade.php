@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 justify-content-between">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold text-primary text-2x1">Pengguna</h3>
                    <a href="{{ route('user.create') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pengguna
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table_user" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Puskesmas</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                                
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
