<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutpage')->insert([
            'title'=>'Phasellus vel interdum elit',
            'aboutUs'=>'Aliquam erat volutpat. Pellentesque fringilla, ligula consectetur cursus scelerisque, leo elit pellentesque sapien, et pharetra arcu elit vitae sem. Suspendisse erat dui, condimentum in mi ac, varius tempor sapien. Donec in justo sit amet ex aliquet maximus ac quis erat.


            Donec fermentum tincidunt tellus quis fermentum. Proin eget imperdiet purus. Nulla facilisi. Aliquam tincidunt porttitor dui sed euismod. Duis est libero, rhoncus fermentum turpis id, tempus fringilla ipsum. Nullam venenatis tincidunt neque vel hendrerit. Suspendisse porta pretium porttitor.
            
            
            Sed purus quam, ultricies eu leo in, sollicitudin varius quam. Proin dictum urna ac diam fermentum tempus. Pellentesque urna urna, ullamcorper a tincidunt dignissim, venenatis in nisi. Vivamus in volutpat tellus. Etiam fermentum luctus posuere.',
            'image'=>'about_us.jpg'
        ]);
    }
}
