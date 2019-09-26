@extends('layouts/app')
@section('title')
 App Toko Online
@endsection

@section('content')
  konten dari child view
@component('layouts/alert',["type"=>"success"])
  Alert-Latihan Berhasil;
@endcomponent
@endsection
