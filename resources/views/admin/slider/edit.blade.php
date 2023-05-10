@extends('admin.layouts.master')
@section('title',$title)
@section('content')
  @include('admin.inc.breadcrump')
    <div class="container-fluid">
       <div class="row">
            <div class="col-8">
                <form action="{{route($route.'.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" name="title" id="title" required class="form-control" value="{{$slider->title}}">
                        @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control" >{{$slider->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="btn_link">Button Link</label>
                        <input type="text" name="btn_link" id="btn_link" class="form-control" value="{{$slider->btn_link}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div> 
    </div> 
@endsection