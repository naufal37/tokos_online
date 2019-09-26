@extends('layouts/app')
@section('content')
  <ul>
    @foreach ($daftar_kategori as $kategori)
      <li>{{$kategori->name}}</li>
    @endforeach
  </ul>
  {{$daftar_kategori->links()}}
@endsection
