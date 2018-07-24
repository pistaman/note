@extends('layouts.draft_app')

@section('content')

<div class="post__container" id="post__markdown">
  @include('posts.form_draft')
  <div class="post__side">
      <div class="post__tab">
          <a href="#" class="post__tab--toggle"><i class="fas fa-play"></i>プレビュー</a>
          <a href="#" class="post__tab--toggle"><i class="fas fa-comment"></i>コメント</a>
      </div>
      <div class="post__side--content" v-html="compiledMarkdown"></div>
      <div class="post__side--content">
          aaa
      </div>
  </div>
</div>


@endsection
