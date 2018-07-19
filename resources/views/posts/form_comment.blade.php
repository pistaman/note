<div class="post__comment">
    @foreach ($post->comments as $comment)
        <div class="form-group-item">
            <textarea class="form-group-content" type="text" name="comment" rows="3">{{ $comment->content }}</textarea>
        </div>
    @endforeach
    <form class="form-group-comment" action="/edit/{{ $post->id }}/comment" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <textarea class="post__edit--comment" type="text" name="comment" rows="3">{{ old('content') }}</textarea>
        <div class="form-group-submit">
            <button class="post__edit--submit" type="submit" name="btn btn-primary">投稿</button>
        </div>
    </form>
</div>
