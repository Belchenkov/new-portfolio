<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'title' => 'HTML5/CSS3',
                'slug' => 'markup',
                'docs_link' => 'https://developer.mozilla.org/en-US/docs/Web/CSS',
                'img' => 'img/category/html_category.jpeg',
            ],
            [
                'title' => 'JavaScript',
                'slug' => 'js',
                'docs_link' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript',
                'img' => 'img/category/js_category.jpeg',
            ],
            [
                'title' => 'Node.js/Express/Nest',
                'slug' => 'node.js',
                'docs_link' => 'https://nodejs.org',
                'img' => 'img/category/node_category.jpeg',
            ],
            [
                'title' => 'Angular/MEAN',
                'slug' => 'angular',
                'docs_link' => 'https://angular.io/',
                'img' => 'img/category/angular_category.jpeg',
            ],
            [
                'title' => 'React/Redux/MERN',
                'slug' => 'react',
                'docs_link' => 'https://reactjs.org/',
                'img' => 'img/category/react_category.png'
            ],
            [
                'title' => 'Vue/Vuex/MEVN',
                'slug' => 'vue',
                'docs_link' => 'https://vuejs.org/',
                'img' => 'img/category/vue_category.jpeg',
            ],
            [
                'title' => 'Electron.js',
                'slug' => 'electron',
                'docs_link' => 'https://www.electronjs.org/',
                'img' => 'img/category/electron_category.jpeg',
            ],
           /* [
                'title' => 'TypeScript',
                'slug' => 'ts',
                'docs_link' => 'https://www.typescriptlang.org/',
                'img' => 'img/category/ts_category.jpeg'
            ],*/
            [
                'title' => 'Nuxt.js/Next.js/SSR',
                'slug' => 'ssr',
                'docs_link' => 'https://nuxtjs.org/',
                'img' => 'img/category/ssr_category.png'
            ],
            [
                'title' => 'React Native',
                'slug' => 'react-native',
                'docs_link' => 'https://reactnative.dev',
                'img' => 'img/category/rn_category.jpeg'
            ],
           /* [
                'title' => 'GraphQL',
                'slug' => 'graphql',
                'docs_link' => 'https://graphql.org/',
                'img' => 'img/category/graphql_category.png'
            ],*/
            /*[
                'title' => 'NS/PWA/Ionic/Flutter',
                'slug' => 'ns-pwa',
                'docs_link' => 'https://nativescript.org/',
                'img' => 'img/category/ns_category.png'
            ],*/
            [
                'title' => 'PHP/Laravel/SQL',
                'slug' => 'php',
                'docs_link' => 'https://www.php.net/',
                'img' => 'img/category/php_category.jpeg'
            ],
            /*[
                'title' => 'Python/Django/Flask',
                'slug' => 'python',
                'docs_link' => 'https://www.python.org/',
                'img' => 'img/category/python_category.jpeg'
            ],
            [
                'title' => 'Golang',
                'slug' => 'go',
                'docs_link' => 'https://golang.org/',
                'img' => 'img/category/go_category.png'
            ]*/
        ];

        foreach ($data as $category) {
            Category::create($category);
        }
    }
}
