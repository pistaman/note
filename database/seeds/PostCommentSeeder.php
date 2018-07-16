<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commentsdummy = 'コメントダミーです。ダミーコメントだよ。';
        for ($i=1; $i < 5; $i++) {
            $posts = new Post;
            $comments = new Comment;
            $comments->content = $commentsdummy;
            $comments->user_id = 1;
            $comments->post_id = $i;
            $comments->save();
        }

    }
}
