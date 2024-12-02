<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs';
    $jobs = [
        'Software Developer',
        'Data Analyst',
        'Database Engineer',
        'Wrestler'
    ];
    return view('jobs.index', compact('title', 'jobs'));
})->name('jobs');


Route::get('/jobs/create', function () {
    return view('jobs.create');
});
