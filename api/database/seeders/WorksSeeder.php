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
            ],
            [
                'title' => 'NewsGird',
                'desc' => 'Верстка сайта на Grid System',
                'img' => 'img/news_grid-min.png',
                'github_link' => 'https://github.com/Belchenkov/news_grid',
                'preview_link' => 'https://nimb.ws/HWwbBm',
                'demo_link' => 'http://news-grid-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Sushi',
                'desc' => 'Адаптивная верстка на CSS Framework Bootstrap 4',
                'img' => 'img/sushi-min.png',
                'github_link' => 'https://github.com/Belchenkov/sushi-bootstrap4',
                'preview_link' => 'https://radikal.ru/video/n6ujfNdpAMn',
                'demo_link' => 'https://sushi-bootstrap-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'BlueRex',
                'desc' => 'Адаптивная верстка на CSS Framework Bootstrap 4',
                'img' => 'img/blueRex.png',
                'github_link' => 'https://github.com/Belchenkov/blueRex',
                'preview_link' => 'https://radikal.ru/video/i1t3oOLayoj',
                'demo_link' => 'http://blue-rex-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Gramdma\'s',
                'desc' => 'Адаптивная верстка на CSS Framework Bootstrap 4',
                'img' => 'img/gramdmas-min.png',
                'github_link' => 'https://github.com/Belchenkov/gramdmas',
                'preview_link' => 'https://radikal.ru/video/vjIwFnk6Z5J',
                'demo_link' => 'https://gramdmas-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Furniture',
                'desc' => 'Адаптивная верстка на CSS Framework Bootstrap 4',
                'img' => 'img/furniture-min.png',
                'github_link' => 'https://github.com/Belchenkov/furniture',
                'preview_link' => 'https://radikal.ru/video/mYh2XyN77i8',
                'demo_link' => 'http://furniture-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Portfolio Bootstrap 4',
                'desc' => 'Адаптивная верстка на CSS Framework Bootstrap 4',
                'img' => 'img/portfolio_bootstrap4-min.png',
                'github_link' => 'https://github.com/Belchenkov/portfolio_bootstrap4',
                'preview_link' => 'https://radikal.ru/video/UzAwCdbtpXN',
                'demo_link' => 'http://portfolio-bootstrap4-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Madmin',
                'desc' => 'Admin Panel on materialize.css',
                'img' => 'img/madmin-min.png',
                'github_link' => 'https://github.com/Belchenkov/madmin',
                'preview_link' => 'https://radikal.ru/video/cQptYN7ZGx3',
                'demo_link' => 'http://madmin-ab.surge.sh',
                'category_id' => 1,
            ],
            [
                'title' => 'Quazzu',
                'desc' => 'Landing Page on Materialize.css',
                'img' => 'img/quazzu-min.png',
                'github_link' => 'https://github.com/Belchenkov/Quazzu',
                'preview_link' => 'https://radikal.ru/video/Jf9Tfpvr2RZ',
                'demo_link' => 'http://quazzu-ab.surge.sh',
                'category_id' => 1,
            ]
        ];

        foreach ($data as $work) {
            Work::create($work);
        }
    }
}
