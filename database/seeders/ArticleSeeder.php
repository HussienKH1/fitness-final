<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Important Things To Look Out When Buying A Protien Bar',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.',
            'image' => 'Images/hazelnuts-dried-fruits-snack-bars.jpg'
        ]);
        Article::create([
            'title' => 'Zero-Counting Calorie Reduction Techniques',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.',
            'image' => 'Images/stair-lunge-1.jpg'
        ]);
        Article::create([
            'title' => 'Things To Consider Before Beginning A New Diet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.',
            'image' => 'Images/flay-lay-scale-weights.jpg'
        ]);


    }
}
