@extends('layouts.app')

@section('title', 'Deskripsi Judul')

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
            <form action="/deskripsi/{{ $deskripsi->id}}" method="POST" enctype="multipart/form-data">
                 @method('PUT')
                 @csrf
                 <label for="">Background Profil</label>
                <div class="form-group">
                    <img src="/image/{{ $deskripsi->bgtentang}}" alt="" class="img-fluid mb-1" width="180">
                    <input type="file" class="form-control col-6" name="bgtentang">
                </div>
                @error('Background Tentang')
                <small style="color:red">{{$message}}</small>
                @enderror

                 <div class="form-group">
                    <label for="">Tentang kami</label>
                    <textarea name="tentang" id="" class="form-control" placeholder="deskripsi">{{ $deskripsi->tentang}}</textarea>
                </div>
                @error('Tentang')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $deskripsi->imgtentang}}" alt="" class="img-fluid" width="90">
                <div class="form-group">
                    <label for="">Gambar Tentang</label>
                    <input type="file" class="form-control col-6" name="imgtentang">
                </div>
                @error('Gambar Tentang')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Keunggulan</label>
                    <input type="text" class="form-control" style="margin-bottom: 20px" name="subjudulunggul" placeholder="Subjudul" value="{{ $deskripsi->subjudulunggul}}">
                    <textarea name="keunggulan" id="" class="form-control" placeholder="deskripsi">{{ $deskripsi->keunggulan}}</textarea>
                </div>
                @error('Keunggulan')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Services</label>
                    <textarea name="service" id="" class="form-control" placeholder="deskripsi">{{ $deskripsi->service}}</textarea>
                </div>
                @error('Service')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $deskripsi->imgservice}}" alt="" class="img-fluid" width="90">
                <div class="form-group">
                    <label for="">Gambar Service</label>
                    <input type="file" class="form-control col-6" name="imgservice">
                </div>
                @error('Gambar Service')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Team</label>
                    <textarea name="team" id="" class="form-control" placeholder="deskripsi">{{ $deskripsi->team}}</textarea>
                </div>
                @error('Team')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Portofolio</label>
                    <textarea name="portofolio" id="" class="form-control" placeholder="deskripsi">{{ $deskripsi->portofolio}}</textarea>
                </div>
                @error('Portofolio')
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


