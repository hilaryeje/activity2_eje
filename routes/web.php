<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$posts = [
    '1' => [
        'Blog_Post' => 'Blog Day 1',
        'Date' => '12/27/2019',
        'Location' => 'Manila, Philippines',
        'Content' => 'Today is the day where we will go to Shanghai, China. We will meet our family friend and eat expensive chinese food.',
    ],
    '2' => [
        'Blog_Post' => 'Blog Day 2',
        'Date' => '12/28/2019',
        'Location' => 'Shanghai, China',
        'Content' => 'Today is our 2nd day in Shanghai, China. Our family friend will tour us in beautiful places in Shanghai.',
    ],
    '3' => [
        'Blog_Post' => 'Blog Day 3',
        'Date' => '12/29/2019',
        'Location' => 'Shanghai, China',
        'Content' => 'Today is our 3rd day in Shanghai, China. Today, we will go to Disneyland China and have fun even if the weather is cold.',
    ],
    '4' => [
        'Blog_Post' => 'Blog Day 4',
        'Date' => '12/29/2019',
        'Location' => 'Shanghai, China',
        'Content' => 'Today is our 4th day in Shanghai, China. We will spend the day by going to Outlet Stores and buy some stuff.',
    ],
    '5' => [
        'Blog_Post' => 'Blog Day 5',
        'Date' => '12/30/2019',
        'Location' => 'Shanghai, China',
        'Content' => 'Today is our 5th day in Shanghai, China. We are now in the Airport to go back in the Philippines.',
    ],
    '6' => [
        'Blog_Post' => 'Blog Day 6',
        'Date' => '12/31/2019',
        'Location' => 'Manila, Philippines',
        'Content' => 'Now that I am home, China is one of the best places I have been to.',
    ],
    '7' => [
        'Blog_Post' => 'Blog Day 7',
        'Date' => '01/01/2020',
        'Location' => 'Manila, Philippines',
        'Content' => 'Today is Wednesday and we will get our dogs from the vet.',
    ]
];

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/myblogs', function () use ($posts){
    return view('myblogs.index',['posts'=>$posts]);
})-> name('myblogs.index');


Route::get('/myblogs/{id}', function ($id) use ($posts){
     abort_if(!(isset($posts[$id])), 404);
     return view('myblogs.show',['post'=>$posts[$id] ]);
})-> name('myblogs.show');
