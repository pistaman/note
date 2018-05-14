<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i < 10; $i++) {
        $posts = new Post;
        $posts->title = 'タイトルだよ'.$i;
        $posts->user_id = 1;
        $posts->content = 'これはテストです。表示がどのようにされるかを確認したいためシーダーなるものを使いこのようにテストを行っているのです。';
        $posts->save();
      }

    }
}
