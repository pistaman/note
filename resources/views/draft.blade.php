@extends('layouts.draft_app')

@section('content')

<div class="post__container">
  <form class="" action="/draft" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <input type="text" name="title" placeholder="タイトル">
    </div>
    <div class="form-group">
      <textarea type="text" name="content" rows="3"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" name="btn btn-primary">保存</button>
    </div>
  </form>
</div>


@endsection
