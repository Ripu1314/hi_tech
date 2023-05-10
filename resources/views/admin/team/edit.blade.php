@extends('admin.layouts.master')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        @include('admin.inc.breadcrump')
        <div class="row">
            <div class="col-11">
                <form action="{{route($route.'.update',$member->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$member->name}}" required>
                            @error('name')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="3" class="form-control" >{{$member->description}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label" for="facebook">Facebook Url</label>
                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{$member->facebook}}" >
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label" for="twitter">Twitter Url</label>
                            <input type="text" name="twitter" id="twitter" class="form-control" value="{{$member->twitter}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label" for="instagram">Instagram Url</label>
                            <input type="text" name="instagram" id="instagram" class="form-control" value="{{$member->instagram}}" >
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label" for="linkedin">Linkedin Url</label>
                            <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{$member->linkedin}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="from-group col-6">
                            <label class="form-label" for="email">Gmail</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{$member->email}}" >
                        </div>
                        <div class="from-group col-6">
                            <label class="form-label" for="website">Website</label>
                            <input type="text" name="website" id="website" class="form-control" value="{{$member->website}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label" for="designation">Designation</label>
                            <select class="form-control" name="designation" id="designation">
                                @foreach($designations as $designation)
                                    <option value="{{$designation->id}}">{{$designation->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="text" name="phone" value="{{$member->phone}}" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection