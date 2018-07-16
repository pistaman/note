<form class="form-group-post" action="/edit/{{ $post->id }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input id="post__edit--title" type="text" name="title" placeholder="タイトル" value="{{ $post->title }}">
    </div>
    <textarea id="post__edit--content" type="text" name="content" rows="3">{{ $post->content }}</textarea>
    <div class="form-group-submit">
        <button id="post__edit--submit" type="submit" name="btn btn-primary">保存</button>
    </div>
</form>
