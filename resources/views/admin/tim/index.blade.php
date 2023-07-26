@extends('layouts.app')

@section('title', 'Data Teams')

@section('content')

<div class="container">
    <a href="/tim/create" class="btn btn-primary mb-1">Tambah Data</a>
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
         </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1
            @endphp
            @foreach ($tim as $team)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $team->title }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->nim }}</td>
                <td>{{ $team->description }}</td>
                <td>
                    <img src="/image/{{ $team->image }}" alt="" class="img-fluid" width="90">
                </td>
                <td >
                    <a href="{{ route('tim.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('tim.destroy', $team->id) }}" method="POST">
                    @csrf    
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>      
</div>

@endsection

<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 1000);
  </script>