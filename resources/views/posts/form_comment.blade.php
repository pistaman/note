<div class="post__comment">
    @foreach ($post->comments as $comment)
        <div class="form-group-item">
            <textarea class="post__edit--comment" type="text" name="comment" rows="3">{{ $comment->content }}</textarea>
            <form class="form-group-content" action="/destroy/{{ $comment->id }}" method="post" id="form_{{ $comment->id }}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <a href="#" class="top__button--link" data-id="{{ $comment->id }}" onclick="deletePost(this);"><i class="fas fa-trash top__button--delete" aria-hidden="true"></i></a>
            </form>
        </div>
    @endforeach
    <form class="form-group-comment" action="/edit/{{ $post->id }}/comment" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <textarea class="post__edit--comment" type="text" name="content" rows="3">{{ old('content') }}</textarea>
        <div class="form-group-submit">
            <button class="post__edit--submit" type="submit" name="btn btn-primary">投稿</button>
        </div>
    </form>
</div>
