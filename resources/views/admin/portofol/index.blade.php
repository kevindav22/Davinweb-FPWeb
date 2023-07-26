@extends('layouts.app')

@section('title', 'Data Portofolio')

@section('content')

<div class="container">
    <a href="/portofol/create" class="btn btn-primary mb-1">Tambah Data</a>
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
                    <th>Link</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1
            @endphp
            @foreach ($portofol as $portofol)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $portofol->title }}</td>
                <td>{{ $portofol->description }}</td>
                <td>
                    <img src="/image/{{ $portofol->image }}" alt="" class="img-fluid" width="90">
                </td>
                <td >
                    <a href="{{ route('portofol.edit', $portofol->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('portofol.destroy', $portofol->id) }}" method="POST">
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

<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 2000);
  </script>

@endsection

