<form class="form-group-comment" action="/edit/{{ $post->id }}" method="post">
    @foreach ($post->comments as $comment)
      <div class="form-group-item">
          <textarea id="post__edit--comment" type="text" name="comment" rows="3">{{ $comment->content }}</textarea>
          <p><button id="post__edit--submit" type="submit" name="btn btn-primary">投稿</button></p>
      </div>
    @endforeach
</form>
