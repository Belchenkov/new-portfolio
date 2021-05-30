<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Smitler',
                'desc' => 'Верска салона красоты с Bootstrap, SASS, Gulp',
                'img' => 'img/smitler-min.png',
                'github_link' => 'https://github.com/Belchenkov/Smitler',
                'preview_link' => 'https://nimb.ws/2ojO4l',
                'demo_link' => 'http://smirler-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Portfolio SASS',
                'desc' => 'Верстка сайта-портфолио с SCSS, Flexbox, Grid System',
                'img' => 'img/portfolio_sass-min.png',
                'github_link' => 'https://github.com/Belchenkov/portfolio-sass',
                'preview_link' => 'https://nimbusweb.me/s/share/5609357/x48vlxdvt1oqy0z3x3ii',
                'demo_link' => 'http://portfolio-sass-ab.surge.sh',
                'category_id' => 1,
            ]
        ];

        foreach ($data as $work) {
            Work::create($work);
        }
    }
}
