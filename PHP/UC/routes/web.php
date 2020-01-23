<?php

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

Route::get('/', function () {

    $dati = App\Task::get();


    return view('home', [
        'UC_items' => $dati
    ]);
});

Route::get('/task/create', function () {

$task = new App\Task;
$task->title = 'Resident Evil ' .rand();
$task->save();
});

Route::get('/task/{id}', function ($id) {

    $task = App\Task::find($id);

    return view('single-task', [
        'UC_item' => $task
    ]);
});



Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/submit', 'mail@submit');