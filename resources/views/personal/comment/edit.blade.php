@extends('personal.layouts.main');
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comments</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Comments</li>
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
                                <h3 class="card-title">Comment</h3>
                            </div>
                            <form action="{{route('personal.comment.update', $comment->id)}}" method="post"
                                  class="card-body">
                                @csrf
                                @method('patch')
                                <label>Message</label>
                                <textarea id="summernote" name="message">
                                    {{$comment->message}}
                                </textarea>
                                @error('message')
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
