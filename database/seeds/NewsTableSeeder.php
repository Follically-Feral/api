<?php

use FollicallyFeral\Models\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $news = News::create([
            'title' => 'First News',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
            'user_id' => 1,
        ]);

        print "Created news ".$news->title."\n";

        $news = News::create([
            'title' => 'Second News',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
            'user_id' => 1,
        ]);

        print "Created news ".$news->title."\n";

        $news = News::create([
            'title' => 'Third News',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
            'user_id' => 1,
        ]);

        print "Created news ".$news->title."\n";

    }
}
