@extends('layouts.public')
@section('title', 'Pustaka Buku')
@section('content')
<div class="body-intro">
  @include('elements.header')

  <div class="container">
      <div class="datalist">
          @foreach($data as $key => $data)
          <div class="dataitems">
            <div class="item-img">
              <img src="{{$data->cover}}" alt="">
            </div>
            <div class="item-inner" data-id="{{$data->id}}">
              <p class="item-detail">lihat</p>
            </div>
            <div class="item-title">
              <p>{{$data->name}}</p>
            </div>
          </div>
        @endforeach
      </div>
  </div>
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