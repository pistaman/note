<form class="form-group-post" action="/draft" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <input class="post__edit--title" type="text" name="title" placeholder="タイトル" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <textarea class="post__edit--content" type="text" name="content" rows="3">{{ old('content') }}</textarea>
  </div>
  <div class="form-group-submit">
    <button class="post__edit--submit" type="submit" name="btn btn-primary">保存</button>
  </div>
</form>
