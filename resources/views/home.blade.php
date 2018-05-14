@extends('layouts.app')

@section('content')

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
      @foreach($posts as $post)
      <div class="top__list">
        <a href="/draft/{{ $post->id }}" class="top__list--link">
          <h3>{{ $post->title }}</h3>
          @if($post->created_at == $post->updated_at)
          <p class="top__list--time">投稿日　{{ $post->created_at }}</p>
          @else
          <p class="top__list--time">編集日　{{ $post->updated_at }}</p>
          @endif
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
