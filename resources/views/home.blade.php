@extends('layouts.app')

@section('content')
@guest
@else
<div class="main__container">
  <div class="top">
    <nav class="top__side">
      <ul>
        <li><a href="#">マイリスト</a></li>
        <li><a href="#">お気に入り</a></li>
        <li><a href="#">Tags</a></li>
      </ul>
    </nav>
    <div class="top__lists">
      <h2 class="top__lists--title"><i class="far fa-file-alt"></i> Notes</h2>
      @if(Session::has('message'))
	    <span class="session__message">{{ Session::get('message') }}</span>
      @endif
      @foreach($posts as $post)
      <div class="top__list">
        <a href="/edit/{{ $post->id }}" class="top__list--link">
          <h3>{{ $post->title }}</h3>
          @if($post->created_at == $post->updated_at)
          <p class="top__list--time">投稿日　{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</p>
          @else
          <p class="top__list--time">編集日　{{ date("Y年 m月 d日",strtotime($post->updated_at)) }}</p>
          @endif
        </a>
        <ul class="top__buttons">
          <li class="top__button share"><p><i class="fas fa-share-alt" aria-hidden="true"></i></p></li>
          <li class="top__button tag"><p><i class="fas fa-tag" aria-hidden="true"></i></p></li>
          <li class="top__button delete">
            <form class="" action="/destroy/{{ $post->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit"><i class="fas fa-trash fa-lg" aria-hidden="true"></i></button>
            </form>
          </li>
        </ul>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endguest
@endsection
