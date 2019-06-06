<?php

use App\User;
use App\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user){
            $user->news()->saveMany(factory(News::class, 5)->make());
        });
    }
}
