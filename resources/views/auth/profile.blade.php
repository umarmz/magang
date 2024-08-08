@extends('template.master')
@section('contents')
    <div class="blog-page area-padding">
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <h2>Update Profile</h2>
                    </div>
                    <form method="POST" action="{{ url('update-profile-users') }}" class="needs-validation" novalidate="">
                        @if (session()->has('err_message'))
                            <div class="alert alert-danger alert-dismissible" role="alert" auto-close="120">
                                <strong>Error! </strong>{{ session()->get('err_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('suc_message'))
                            <div class="alert alert-success alert-dismissible" role="alert" auto-close="120">
                                <strong>Success! </strong>{{ session()->get('suc_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label for="frist_name">Nama Lengkap</label>
                                    <input id="frist_name" type="text" class="form-control" name="nama_lengkap" autofocus required 
                                           value="{{ $data['profile'] ? $data['profile']->nama_lengkap : '' }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" required 
                                                   value="{{ $data['profile'] ? $data['profile']->email : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_telp">No Telepon</label>
                                            <input id="no_telp" type="number" name="no_telp" class="form-control" required 
                                                   value="{{ $data['profile'] ? $data['profile']->no_telp : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nim">NIM</label>
                                        <input id="nim" type="text" name="nim" class="form-control" required 
                                               value="{{ $data['profile'] ? $data['profile']->nim : '' }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="nik">NIK</label>
                                        <input id="nik" type="text" name="nik" class="form-control" required 
                                               value="{{ $data['profile'] ? $data['profile']->nik : '' }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input id="tempat_lahir" type="text" name="tempat_lahir" class="form-control" required 
                                               value="{{ $data['profile'] ? $data['profile']->tempat_lahir : '' }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control" required 
                                               value="{{ $data['profile'] ? $data['profile']->tanggal_lahir : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input id="jenis_kelamin" type="text" name="jenis_kelamin" class="form-control" required 
                                           value="{{ $data['profile'] ? $data['profile']->jenis_kelamin : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input id="agama" type="text" name="agama" class="form-control" required 
                                           value="{{ $data['profile'] ? $data['profile']->agama : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_lengkap">Alamat Lengkap</label>
                                    <textarea id="alamat_lengkap" name="alamat_lengkap" class="form-control" cols="30" rows="5" required>{{ $data['profile'] ? $data['profile']->alamat_lengkap : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name="password" class="form-control" required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
