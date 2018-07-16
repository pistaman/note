@extends('layouts.draft_app')

@section('content')

<div class="post__container">
  @include('posts.form_edit')
  @include('posts.form_comment')
</div>


@endsection
