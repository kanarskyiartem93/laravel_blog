@extends('admin.layouts.main');
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
                            <li class="breadcrumb-item active">Create User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-4">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">User</h3>
                            </div>
                            <form action="{{route('admin.user.store')}}" method="post" class="card-body">
                                @csrf
                                <label>Name</label>
                                <input class="form-control form-control-lg" value="{{old('name')}}" name="name" type="text" placeholder="name">
                                @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                <br>
                                <label>Email</label>
                                <input class="form-control form-control-lg" value="{{old('email')}}" name="email" type="email" placeholder="email">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <br>
                                <div class="form-group w-50">
                                    <label>Choose role of user</label>
                                    <select name="role" class="form-control">
                                        @foreach($roles as $id => $role)
                                            <option
                                                value="{{$id}}" {{$id == old('role_id') ? "selected" : ""}}>{{$role}}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary" value="Create">
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
