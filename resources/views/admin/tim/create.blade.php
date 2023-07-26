@extends('layouts.app')

@section('title', 'Data Teams')

@section('content')

<div class="container">
    <a href="/tim" class="btn btn-primary mb-1">Kembali</a>
   <div class="row">
    <div class="col-md-12">
        <form action="{{route('tim.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="">Nama</label>
            <input type="varchar" class="form-control" name="name" placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="">Nim</label>
            <input type="varchar" class="form-control" name="nim" placeholder="Nim">
        </div>
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror 
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi"></textarea>
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