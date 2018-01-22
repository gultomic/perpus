@extends('layouts.public')
@section('title', 'Pustaka Ebook')
@section('content')
<div class="body-intro">
  @include('elements.header')

  <div class="container">
      <div class="datalist">
        @foreach($data as $key)
          <div class="dataitems">
            <div class="item-img">
              <img src="{{asset($key['cover'])}}" alt="">
            </div>
            <div class="item-inner" onClick="location.href='{{url('ebook/' . $key['id'])}}'">
              <p class="item-detail">lihat</p>
            </div>
            <div class="item-title">
              <p>{{$key['name']}}</p>
            </div>
          </div>
        @endforeach
      </div>
  </div>

  
</div>
@endsection
@push('scripts')
<script>
  //$('.item-inner').on('click', function(){
  //  ebook_id = $(this).data('id');
  //  showdetailPop('ebook/' + ebook_id);
  //});
</script>
@endpush