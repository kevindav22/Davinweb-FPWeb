@extends('layouts.app')

@section('title', 'Data Kontak')

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
            <form action="/contact/{{ $contact->id}}" method="POST" enctype="multipart/form-data">
                 @method('PUT')
                 @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $contact->email}}">
                </div>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Email</label>
                    <input type="text" class="form-control" name="linkemail" placeholder="LinkEmail" value="{{ $contact->linkemail}}">
                </div>
                @error('Linkemail')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{ $contact->telepon }}">
                </div>
                @error('telepon')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp" value="{{ $contact->whatsapp }}">
                </div>
                @error('Whatsapp')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for=""> Link Whatsapp</label>
                    <input type="text" class="form-control" name="linkwhatsapp" placeholder="LinkWhatsapp" value="{{ $contact->linkwhatsapp }}">
                </div>
                @error('Whatsapp')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $contact->alamat}}">
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Maps</label>
                    <textarea name="maps_embed" id="" class="form-control" placeholder="Maps Embed">{{ $contact->maps_embed}}</textarea>
                </div>
                @error('maps_embed')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for=""> Link Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ $contact->facebook }}">
                </div>
                @error('Facebook')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ $contact->instagram}}">
                </div>
                @error('Intagram')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Tiktok</label>
                    <input type="text" class="form-control" name="tiktok" placeholder="Tiktok" value="{{ $contact->tiktok }}">
                </div>
                @error('Tiktok')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="linkedin" value="{{ $contact->linkedin }}">
                </div>
                @error('Linkedin')
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


