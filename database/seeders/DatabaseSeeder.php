<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostStatus;
use App\Models\ReactionType;
use App\Models\Reply;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // Reaction Types
        // $types = [
        //     'Like',
        //     'Love',
        //     'Care',
        //     'Happy',
        //     'Sad',
        //     'Laugh',
        // ];

        // foreach ($types as $type) {
        //     ReactionType::factory()->create([
        //         'type' => $type
        //     ]);
        // }

        // // Post Statuses
        // $types = [
        //     'Pending',
        //     'Published',
        //     'Cancelled',
        //     'Postponed',
        //     'Private',
        // ];

        // foreach ($types as $type) {
        //     PostStatus::create(
        //         [
        //             'type' => $type
        //         ]
        //     );
        // }

        // // users
        // User::factory()->create([
        //     'name' => 'Maged Yaseen',
        //     'email' => 'magedyaseengroups@gmail.com',
        //     'mobile' => '01024750245',
        //     'password' => Hash::make('password'),
        //     'roles' => 'admin',
        // ]);

        // User::factory(100)->create();

        // // Posts
        // Post::factory(400)->create();

        // // Reactions

        // // Comments
        // Comment::factory()->count(1500)->create();

        // // Replies
        // Reply::factory()->count(2115)->create();


    }
}
