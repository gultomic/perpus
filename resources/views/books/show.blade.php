@extends('layouts.public')
@section('title', 'Pustaka Buku')
@section('content')
<div class="body-intro">
  @include('elements.header')
  <div class="container">
    <div class="single">
      <div class="single-header">
        {{--  <div class="single-image">  --}}
          <img src="{{asset($data['cover'])}}" alt="">
        {{--  </div>  --}}
        <div class="single-title">
          <div>JUDUL: {!!$data['name']!!}</div>
          <p>PENULIS: {!!$data['writer']!!}</p>
          <p>PENERBIT: {!!$data['publisher']!!}</p>
          <p>TAHUN: {!!$data['year']!!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection