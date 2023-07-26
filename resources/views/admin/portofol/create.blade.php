@extends('layouts.app')

@section('title', 'Data Portofolio')

@section('content')

<div class="container">
    <a href="/portofol" class="btn btn-primary mb-1">Kembali</a>
   <div class="row">
    <div class="col-md-12">
        <form action="{{route('portofol.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="title" placeholder="Judul">
        </div>
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" class="form-control" name="description" placeholder="Link">
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
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        </form>
    </div>
   </div>
</div>

@endsection