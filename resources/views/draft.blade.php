@extends('layouts.draft_app')

@section('content')

<div class="post__container">
  @include('posts.form_draft')
  <div class="hoge" v-html="compiledMarkdown">

  </div>
</div>


@endsection
