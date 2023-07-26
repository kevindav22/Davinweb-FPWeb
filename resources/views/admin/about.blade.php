@extends('layouts.app')

@section('title', 'Data Tentang')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Perusahaan" value="{{ $about->nama }}">
                </div>
                @error('Nama Perusahaan')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Perusahaan</label>
                    <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi Perusahaan">{{ $about->subjudul }}</textarea>
                </div>
                @error('Deskripsi Perusahaan')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Visi Perusahaan</label>
                    <textarea name="visi" id="" class="form-control" placeholder="Visi">{{ $about->visi }}</textarea>
                </div>
                @error('Visi')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Misi Perusahaan</label>
                    <textarea name="misi" id="" class="form-control" placeholder="MisiPerusahaan">{{ $about->misi }}</textarea>
                </div>
                @error('Misi')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $about->logo}}" alt="" class="img-fluid" width="90">
                <div class="form-group">
                    <label for="">Logo Perusahaan</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                @error('Logo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 1000);
  </script>
@endsection
