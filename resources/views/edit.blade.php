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
  @include('posts.form_edit')
  @include('posts.form_comment')
</div>


@endsection
