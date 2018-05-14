@extends('layouts.draft_app')

@section('content')
<div class="main__container">
  <div class="detail__container">
    <div class="detail__inner">
        {{ $posts->content }}
    </div>
  </div>
</div>




@endsection
