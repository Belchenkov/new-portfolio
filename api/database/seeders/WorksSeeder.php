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
            ],
            [
                'title' => 'Expense Tracker',
                'desc' => 'Keep track of income and expenses. Add and remove items and save to local storage',
                'img' => 'img/expense_tracker_js.png',
                'github_link' => 'https://github.com/Belchenkov/expense_tracker_js',
                'preview_link' => 'https://radikal.ru/video/unyldKI4ag1',
                'demo_link' => 'http://expense-tracker-js-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Expense Tracker',
                'desc' => 'Keep track of income and expenses. Add and remove items and save to local storage',
                'img' => 'img/meal_finder_js.png',
                'github_link' => 'https://github.com/Belchenkov/meal_finder_js',
                'preview_link' => 'https://radikal.ru/video/oarsxEbLJEv',
                'demo_link' => 'http://meal-finder-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Music Player',
                'desc' => 'Create beautiful UI to play music stored in the "music folder" using the HTML5 audio API',
                'img' => 'img/music_player_js.png',
                'github_link' => 'https://github.com/Belchenkov/music_player_js',
                'preview_link' => 'https://radikal.ru/video/A7qYK0Ct5bJ',
                'demo_link' => 'http://music-player-js-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Hangman Game',
                'desc' => 'Select a letter to figure out a hidden word in a set amount of chances',
                'img' => 'img/handman.png',
                'github_link' => 'https://github.com/Belchenkov/hangman_game',
                'preview_link' => 'https://radikal.ru/video/1mxIpdFTLCC',
                'demo_link' => 'http://handman-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Movie Seat Booking',
                'desc' => 'Display movie choices and seats in a theater to select from in order to purchase tickets',
                'img' => 'img/movie-seat-booking.png',
                'github_link' => 'https://github.com/Belchenkov/movie_seat-booking_js',
                'preview_link' => 'https://radikal.ru/video/TQWLqXiNyIe',
                'demo_link' => 'http://movie-seat-booking-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Custom Video Player',
                'desc' => 'Custom video player using the HTML5 video element and its JavaScript API with a custom design',
                'img' => 'img/custom-video-player.png',
                'github_link' => 'https://github.com/Belchenkov/js-video-timer',
                'preview_link' => 'https://radikal.ru/video/xzDDJbtLv8x',
                'demo_link' => 'http://custom-video-player-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Exchange Rate Calculator',
                'desc' => 'Select countries to get the exchange rate for a specific amount',
                'img' => 'img/exchange_calc.png',
                'github_link' => 'https://github.com/Belchenkov/exchange-rate-calc',
                'preview_link' => 'https://radikal.ru/video/K6JD1VR2pxX',
                'demo_link' => 'http://exchange_rate_calc-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Speech Text Reader',
                'desc' => 'A text to speech app for non-verbal people. Pre-made buttons and custom text speech.',
                'img' => 'img/text_speech_reader.png',
                'github_link' => 'https://github.com/Belchenkov/speech_text_reader_js',
                'preview_link' => 'https://radikal.ru/video/l9drNIghfA5',
                'demo_link' => 'http://text-speech-reader.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Breakout Game',
                'desc' => 'Game where you control a paddle with the arrow keys to bounce a ball up to break bricks.',
                'img' => 'img/breackout_game_js.png',
                'github_link' => 'https://github.com/Belchenkov/breakout_game',
                'preview_link' => 'https://radikal.ru/video/Q6epddLtZpV',
                'demo_link' => 'http://breakout-game-ab.surge.sh',
                'category_id' => 2,
            ],
            [
                'title' => 'Speed Typer Typing Game',
                'desc' => 'Game to beat the clock by typing random words',
                'img' => 'img/typing_game_js.png',
                'github_link' => 'https://github.com/Belchenkov/typing_game_js',
                'preview_link' => 'https://radikal.ru/video/4K0PPC3QPXB',
                'demo_link' => 'http://speed-typing-game-ab.surge.sh',
                'category_id' => 2,
            ]
        ];

        foreach ($data as $work) {
            Work::create($work);
        }
    }
}
