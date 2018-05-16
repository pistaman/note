@extends('layouts.draft_app')

@section('content')

<div class="post__container">
  @if ($errors->any())
  <div class="post__errors">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form class="" action="/edit/{{ $post->id }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <input type="text" name="title" placeholder="タイトル" value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <textarea type="text" name="content" rows="3">{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" name="btn btn-primary">保存</button>
    </div>
  </form>
</div>


@endsection
