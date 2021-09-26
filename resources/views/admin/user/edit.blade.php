@extends('admin.layouts.main');
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
                            <li class="breadcrumb-item active">{{$user->name}}</li>
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
                            <form action="{{route('admin.user.update', $user->id)}}" method="post" class="card-body">
                                @csrf
                                @method('patch')
                                <label>Title</label>
                                <input class="form-control form-control-lg" value="{{$user->name}}" name="name" type="text" placeholder="name">
                                @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                <br>
                                <label>Email</label>
                                <input class="form-control form-control-lg" value="{{$user->email}}" name="email" type="email" placeholder="email">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <br>
                                <div class="form-group w-50">
                                    <label>Choose role of user</label>
                                    <select name="role" class="form-control">
                                        @foreach($roles as $id => $role)
                                            <option
                                                value="{{$id}}" {{$id == $user->role ? "selected" : ""}}>{{$role}}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group w-50">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Edit">
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
