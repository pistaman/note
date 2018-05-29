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
  @if(Session::has('message'))
    <p id="session__message">{{ Session::get('message') }}</p>
  @endif
  <form class="" action="/draft" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <input id="post__edit--title" type="text" name="title" placeholder="タイトル" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <textarea id="post__edit--content" type="text" name="content" rows="3">{{ old('content') }}</textarea>
    </div>
    <div class="form-group submit">
      <button id="post__edit--submit" type="submit" name="btn btn-primary">保存</button>
    </div>
  </form>
</div>


@endsection
