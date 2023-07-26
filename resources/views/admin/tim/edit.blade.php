@extends('layouts.app')

@section('title', 'Data Teams')

@section('content')

<div class="container">
    <a href="/tim" class="btn btn-primary mb-1">Kembali</a>
    
   <div class="row">
    <div class="col-md-12">
        <form action="{{route('tim.update', $tim->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$tim->title}}">
        </div>
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="Nama" placeholder="Nama" value="{{$tim->name}}">
        </div>
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <div class="form-group">
            <label for="">Nim</label>
            <input type="text" class="form-control" name="nim" placeholder="Nim" value="{{$tim->nim}}">
        </div>
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi">{{$tim->description}}</textarea>
        </div>
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        @error('image')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <img src="/image/{{$tim->image}}" alt="" class="img-fluid" width="25%">
        <div class="form-group pt-3">
            <button type="submit" class="btn btn-primary btn-block ">Submit</button>
        </div>
        </form>
    </div>
   </div>
</div>

@endsection