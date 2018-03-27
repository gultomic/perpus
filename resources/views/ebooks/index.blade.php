@extends('layouts.public')
@section('title', 'Pustaka Ebook')
@section('content')
<div class="body-intro">
  @include('elements.header')
  <div class="container">
      <div class="datalist">
        @foreach($data['ebooks'] as $item)
          <div class="dataitems" data-category="{{$item->category_id}}">
            <div class="item-img">
              <img src="{{asset('/storage/ebooks/'.$item['folder']).'/pages/1.jpg'}}" alt="">
            </div>
            <div class="item-inner" data-id="{{$item->id}}">
              <p class="item-detail">lihat</p>
            </div>
            <div class="item-title">
              <p>{{$item['name']}}</p>
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
      {{$data['ebooks']->appends(Request::except('page'))->links()}}
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

  $('.category-select').change(function(){
    category = $(this).val();
    if(category != "0"){
      window.location.href = '?cat='+$(this).val();
    }else{
      window.location.href = '/ebook';
    }
  });

  $('.search-bar').keypress(function(e){
    _find = $(this).val()
    if(e.which == 13){
      if(_find != '') {
        window.location.href = '?find='+_find;
      }else{
        window.location.href = '/ebook';
      }
    }
  });
  $('.item-inner').on('click', function(){
   ebook_id = $(this).data('id');
   showdetailPop('api/ebook/' + ebook_id, 'ebook');
  });
</script>
@endpush