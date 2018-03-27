@extends('layouts.public')
@section('title', 'Pustaka Buku')
@section('content')
<div class="body-intro">
  @include('elements.header')
  <div class="container">
      <div class="datalist">
          @foreach($data['books'] as $item)
          <div class="dataitems" data-category="{{$item->category_id}}">
            <div class="item-img">
              <img src="{{$item->cover}}" alt="">
            </div>
            <div class="item-inner" data-id="{{$item->id}}" onclick="location.href='{{url('/book/'.$item->id)}}'">
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
    <div class="nav navbar-nav">
      <div class="container-fluid">
        <div class="form-inline">
          <select class="form-control category-select">
            <option value="0">Semua Kategory</option>
            @foreach($data['category'] as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
          <div class="input-group">
            <input type="text" class="form-control search-bar" placeholder="Pencarian...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </span>
          </div>
        </div>
      </div> 
    </div>
    
    <div class="nav navbar-nav navbar-right bootpag"  style="margin-right:0;">
      <p class="navbar-text">Data: {{$data['record']}} Arsip</p>
      {{$data['books']->appends(Request::except('page'))->links()}}
    </div>
  </nav>
</div>

@endsection
@push('scripts')
<script>
  $(document).ready(function(){
    $.urlParam = function(name){
      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
      if(results == null){
        return null;
      }else{
        return results[1] || 0;
      }
    }
    _cat = $.urlParam('cat');
    if(_cat != null){
      $('.category-select option[value="'+_cat+'"]').attr("selected",true);
    }
    _find = $.urlParam('find');
    if(_find != ''){
      $('.search-bar').val(_find);
    }
  });
  // $('.item-inner').on('click', function(){
  //   book_id = $(this).data('id');
  //   showdetailPop('book/'+book_id, 'book');
  // });
  $('.category-select').change(function(){
    category = $(this).val();
    if(category != "0"){
      window.location.href = '?cat='+$(this).val();
    }else{
      window.location.href = '/book';
    }
  });
  $('.search-bar').keypress(function(e){
    _find = $(this).val()
    if(e.which == 13){
      if(_find != '') {
        window.location.href = '?find='+_find;
      }else{
        window.location.href = '/book';
      }
    }
  });
</script>
@endpush