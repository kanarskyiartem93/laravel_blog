@extends('admin.layouts.main');
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Tag</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Tags</a></li>
                            <li class="breadcrumb-item active">{{$tag->title}}</li>
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
                                <h3 class="card-title">Tag</h3>
                            </div>
                            <form action="{{route('admin.tag.update', $tag->id)}}" method="post" class="card-body">
                                @csrf
                                @method('patch')
                                <label>Title</label>
                                <input class="form-control form-control-lg" value="{{$tag->title}}" name="title" type="text" placeholder="title of tag">
                                @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                <br>
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
