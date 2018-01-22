@extends('layouts.public')
@section('title', 'Pustaka Buku')
@section('content')
<div class="body-intro">
  @include('elements.header')
  <div class="container">
      <div class="datalist">
          @foreach($data as $item)
          <div class="dataitems">
            <div class="item-img">
              <img src="{{$item->cover}}" alt="">
            </div>
            <div class="item-inner" data-id="{{$item->id}}">
              <p class="item-detail">lihat</p>
            </div>
            <div class="item-title">
              <p>{{$item->name}}</p>
            </div>
          </div>
        @endforeach
      </div>
  </div>
  <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
      <div class="navbar-header">
        <p>FOOTER</p>
      </div>
      <div class="nav navbar-nav navbar-right bootpag"  style="margin-right:0;">
        {{$data->render()}}
      </div>
    </div>
  </nav>
</div>

@endsection
@push('scripts')
<script>
  $('.item-inner').on('click', function(){
    book_id = $(this).data('id');
    showdetailPop('book/'+book_id);
  });
</script>
@endpush