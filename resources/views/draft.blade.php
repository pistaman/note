@extends('layouts.draft_app')

@section('content')

<div class="post__container" id="post__markdown">
  @include('posts.form_draft')
  <div class="post__preview" v-html="compiledMarkdown">

  </div>
</div>


@endsection
