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

Route::get('/home', function () {
    $nav =[
            [
                'name' => 'Home',
                'href' => '#'
            ],
            [
                'name' => 'About me',
                'href' => 'about-me'
            ],
            [
                'name' => 'Contact',
                'href' => '#'
            ]
        ];

        
    return view('home', compact('nav'));

});

Route::get('/about-me', function () {
    $nav =[
        [
            'name' => 'Home',
            'href' => 'home'
        ],
        [
            'name' => 'About me',
            'href' => 'about-me'
        ],
        [
            'name' => 'Contact',
            'href' => '#'
        ]
        ];
    return view('about-me',  compact('nav'));
    
}) -> name('about-me');
