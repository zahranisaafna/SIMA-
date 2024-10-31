<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Zahra Nisaa', 'title' => 'About']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){
    
    $post = Post::find($slug);  

    return view('post',['title'=>'Single Post', 'post' => $post]);
}); 

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

//Login Mahasiswa
Route::get('/login', function () {
    return view('login', ['title' => 'Sistem Informasi Manajemen Akademik (SIMA)']);
});

//Dashboard Mahasiswa
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});
Route::get('/notification', function () {
    return view('notification', ['title' => 'Notification']);
});
Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});
Route::get('/registrasi', function () {
    return view('registrasi', ['title' => 'Registrasi']);
});
Route::get('/akademik', function () {
    return view('akademik', ['title' => 'Akademik']);
});